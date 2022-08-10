;(function () {
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  on('click', '.mobile-nav-toggle', function (e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Scroll with offset on links with a class name .scrollto
   */
  //   on(
  //     'click',
  //     '.scrollto',
  //     function (e) {
  //       if (select(this.hash)) {
  //         // e.preventDefault()

  //         let navbar = select('#navbar')
  //         if (navbar.classList.contains('navbar-mobile')) {
  //           navbar.classList.remove('navbar-mobile')
  //           let navbarToggle = select('.mobile-nav-toggle')
  //           navbarToggle.classList.toggle('bi-list')
  //           navbarToggle.classList.toggle('bi-x')
  //         }
  //         // scrollto(this.hash)
  //       }
  //     },
  //     true
  //   )
})()
