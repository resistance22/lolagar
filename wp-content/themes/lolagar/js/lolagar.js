document.addEventListener("DOMContentLoaded", () => {

  let autoScrolling = false

  const navHeight = document.querySelector(".food-types").clientHeight + 5
  const navBtnClass = '.swiper-slide'


  function getElementIndex(element) {
    return Array.from(element.parentNode.children).indexOf(element);
  }

  function scrollTo(offset, callback) {
    const fixedOffset = offset.toFixed();
    const onScroll = function () {
      if (window.scrollY.toFixed() === fixedOffset) {
        window.removeEventListener('scroll', onScroll)
        callback()
      }
    }

    window.addEventListener('scroll', onScroll)
    onScroll()
    window.scrollTo({
      top: offset,
      behavior: 'smooth'
    })
  }

  const menuSwiper = new Swiper('.swiper', {
    // Optional parameters
    slidesPerView: 'auto',
    slidesOffsetBefore: 10,
    slidesOffsetAfter: 15,
    spaceBetween: 16,
    centerSlidesBounds: true,
    centerSlides: true,
    freeMode: false
  })

  const removeAllActiveMenu = () => {
    const allBtns = document.querySelectorAll(navBtnClass)
    for (let btn of allBtns) {
      btn.classList.toggle("active", false)
    }
  }

  const SetActiveMenuItem = (target) => {
    if (!autoScrolling) {

      removeAllActiveMenu()
      const index = getElementIndex(target)
      if (index != null) {
        menuSwiper.slideTo(index)
      }
      const term_id = target.getAttribute("food-type-id").split('-')[1]
      const activeItem = document.querySelector(`[food-type-id-btn="btn-${term_id}"]`)
      activeItem.classList.toggle("active", true)
    }
  }



  let topEntryObserver = new IntersectionObserver(function (entries, observer) {
    for (let entry of entries) {
      if (entry.boundingClientRect.y < navHeight && entry.intersectionRatio < 1) {
        SetActiveMenuItem(entry.target)
      }
    }
  }, {
    threshold: 1,
    rootMargin: `-${navHeight}px 0px 0px 0px`
  })

  let bottomEntryObserver = new IntersectionObserver(function (entries, observer) {
    for (let entry of entries) {
      if (entry.isIntersecting && !(entry.intersectionRect.y > navHeight)) {
        SetActiveMenuItem(entry.target)
      }
    }
  }, {
    threshold: 0.2,
    rootMargin: `-${navHeight}px 0px 0px 0px`
  })

  const buttons = document.querySelectorAll(navBtnClass)
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', (e) => {
      removeAllActiveMenu()
      const term_id = e.currentTarget.getAttribute("food-type-id-btn").split('-')[1]
      e.currentTarget.classList.toggle("active", true)
      const foundFoodSection = document.querySelector(`[food-type-id="type-${term_id}"]`)
      autoScrolling = true
      if (foundFoodSection) {
        scrollTo(foundFoodSection.offsetTop - navHeight, () => {
          console.log("callback");
          autoScrolling = false
        })
      }
    })
  }

  const foodSections = document.querySelectorAll('.food-type-section')
  for (let section of foodSections) {
    topEntryObserver.observe(section)
    bottomEntryObserver.observe(section)
  }



})