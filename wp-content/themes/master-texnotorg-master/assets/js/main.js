// меню бургер 

const menuBurger = document.querySelector('.menu-burger'),
    menuBurgerSpan = document.querySelector('.menu-burger span'),
    menuList = document.querySelector('.header__menu'),
    mobileWrapper = document.querySelector('.mobile-wrapper')
headerInfoBlockItem = document.querySelector('.info-line'),
    mobileBack = document.querySelector('.nav__link');


menuBurger.addEventListener('click', () => {
    menuBurgerSpan.classList.toggle('active');
    menuList.classList.toggle('animate');
    mobileWrapper.classList.toggle('animate');
    headerInfoBlockItem.classList.toggle('active')
    parentList.insertAdjacentElement("afterend", headerInfoBlockItem);

});

const arrow = document.querySelectorAll('.nav-button');
for (i = 0; i < arrow.length; i++) {
    let thisLink = arrow[i].previousElementSibling;
    let subMenu = arrow[i].nextElementSibling;
    let thisArrow = arrow[i];


    arrow[i].addEventListener('click', function() {
        console.log(1);
        subMenu.classList.toggle('open');
        thisArrow.classList.toggle('active');
    });

    arrow[i].addEventListener('click', function(e) {
        e.preventDefault();

    });
}



// arrow.forEach((el) => {
//     el.addEventListener('click', (e) => {
//         console.log(e.target);

//     })

// })




// for (i = 0; i < arrow.length; i++) {
//     let thisLink = arrow[i].previousElementSibling;
//     let subMenu = arrow[i].nextElementSibling;
//     let thisArrow = arrow[i];


//     arrow[i].addEventListener('click', function() {
//         console.log(e.target);
//         subMenu.classList.toggle('open');
//         thisArrow.classList.toggle('active');
//     });
// }




window.addEventListener('resize', () => {

    if (window.innerWidth < 900) {
        parentList.insertAdjacentElement("afterend", headerInfoBlockItem);


    } else {
        logoScroll.insertAdjacentElement("afterend", headerInfoBlockItem);
    }

})




// header menu scroll



const headerListScroll = document.querySelector('.header__list'),
    headerMenuScroll = document.querySelector('.header__menu-mini');

let logoScroll = document.querySelector('.logo-scroll'),
    parentList = document.querySelector('.parent-list'),
    parentHeader = document.querySelector('.parent-header'),
    parenReturnDesctop = document.querySelector('.menu-burger');



window.addEventListener('scroll', () => {
    let scrollPos = window.scrollY;
    if (scrollPos > 0) {
        headerMenuScroll.classList.add('active');
        parentList.insertAdjacentElement("afterbegin", logoScroll);
        if (window.innerWidth <= 900) {
            headerMenuScroll.classList.remove('active');
            parenReturnDesctop.insertAdjacentElement("afterend", logoScroll);
        }
    } else {
        headerMenuScroll.classList.remove('active');
        parentHeader.insertAdjacentElement("afterbegin", logoScroll);
        // // parenReturnDesctop.insertAdjacentElement("afterend", logoScroll);

    }
});



window.addEventListener('resize', () => {

    if (window.innerWidth > 900) {
        parentHeader.insertAdjacentElement("beforeend", headerInfoBlockItem);
    }

})


// // меню popup
const btns = document.querySelectorAll('.callback-button')
popup = document.querySelector('.popup-overlay'),
    btnСlose = document.querySelector('.btn-close');

btns.forEach((el) => {
    el.addEventListener('click', (e) => {
        // let path = e.currentTarget.getAttribute('class');
        popup.classList.add('active');
    })
});
popup.addEventListener('click', (e) => {

    if (e.target == popup) {
        popup.classList.remove('active');
    }
})

btnСlose.addEventListener('click', (e) => {
    popup.classList.remove('active');
});

// // меню popupslide
// const btnSlide = document.querySelectorAll('.popup-slide')
// popup = document.querySelector('.popup-overlay'),
//     btnСlose = document.querySelector('.btn-close');

// btnSlide.forEach((el) => {
//     el.addEventListener('click', (e) => {
//         console.log(el);
//         popup.classList.add('active');
//     })
// });
// popup.addEventListener('click', (e) => {

//     if (e.target == popup) {
//         popup.classList.remove('active');
//     }
// })

// btnСlose.addEventListener('click', (e) => {
//     popup.classList.remove('active');
// });

// кнопки табов 

// const tabsBtn = document.querySelectorAll('.tab-description'),
//     tabsItem = document.querySelectorAll('.tab-item');

// tabsBtn.forEach(oneTabClick);


// function oneTabClick(item) {
//     item.addEventListener('click', () => {
//         let currentBtn = item;
//         let tabId = currentBtn.getAttribute('data-tab');
//         let currentTab = document.querySelector(tabId);
//         if (!currentBtn.classList.contains('active')) {
//             tabsBtn.forEach((item) => {
//                 item.classList.remove('active');
//             })
//             tabsItem.forEach((item) => {
//                 item.classList.remove('active');
//             })
//         }
//         currentBtn.classList.add('active');
//         currentTab.classList.add('active');
//     });
// }
// document.querySelector('.tab-description').click();
const tabButtons = Array.from(document.querySelectorAll('.tab-list li')),
    tabContent = Array.from(document.querySelectorAll('.tab-content li'));

const clearActiveClass = (element, className = "active") => {
    element.find(item => item.classList.remove(`${className}`))
}


const setActiveClass = (element, index, className = "active") => {
    element[index].classList.add(`${ className }`)
}



const checkoutTabs = (item, index) => {
    item.addEventListener('click', () => {

        clearActiveClass(tabButtons);
        clearActiveClass(tabContent);
        setActiveClass(tabButtons, index);
        setActiveClass(tabContent, index)
    })

};
tabButtons.forEach(checkoutTabs);