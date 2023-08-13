
//Main Slider Active
if (document.getElementById('zcart-slider')) {
    var mainSlider = tns({
        container: '#zcart-slider',
        items: 1,
        speed: 800,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
    });
}

//About success stories Slider Active
if (document.querySelector('.success-stories-slider')) {
    var mainSlider = tns({
        container: '.success-stories-slider',
        items: 1,
        speed: 800,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
        nav: false,
    });
}

//Vendor Single Slider Active
if (document.getElementById('vendorSingleSlider')) {
    var vendorSlider = tns({
        container: '#vendorSingleSlider',
        items: 1,
        speed: 800,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
    });
}

//Vendor Single Info Slider Active
if (document.getElementById('vendorInfoSlide')) {
    var vendorSlider = tns({
        container: '#vendorInfoSlide',
        items: 1,
        speed: 800,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
    });
}

//Vendor Certificates Slider Active
if (document.getElementById('certifictesSliders')) {
    var vendorSlider = tns({
        container: '#certifictesSliders',
        items: 4,
        speed: 800,
        slideBy: 'page',
        autoplay: false,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        gutter: 20,
        nav: false,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
        responsive: {
            640: {
                items: 1
            },
            700: {
                items: 2
            },
            1000: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });
}

//Blog page recommend product slider
if (document.getElementById('recommend-product-slider')) {
    var vendorSlider = tns({
        container: '#recommend-product-slider',
        speed: 800,
        slideBy: 'page',
        autoplay: false,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        gutter: 20,
        nav: true,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
        responsive: {
            640: {
                items: 1
            },
            700: {
                items: 2
            },
            1000: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });
}
//flash deals on home page
if (document.getElementById('recommend-product-slider2')) {
    var vendorSlider = tns({
        container: '#recommend-product-slider2',
        speed: 800,
        slideBy: 'page',
        autoplay: false,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: false,
        gutter: 20,
        nav: true,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
        responsive: {
            640: {
                items: 1
            },
            700: {
                items: 2
            },
            1000: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });
}

//Mega menu slide active
const aboutVendorSldSelector = document.querySelectorAll('.vendor-about-slider');

if (aboutVendorSldSelector.length > 0) {
    aboutVendorSldSelector.forEach(slider => {
        const aboutUsVendorSlider = tns({
            container: slider,
            speed: 800,
            slideBy: 'page',
            autoplay: false,
            autoplayButtonOutput: false,
            mouseDrag: true,
            rewind: false,
            gutter: 20,
            nav: false,
            controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
            responsive: {
                640: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
}

//single product thumbnail slider
if (document.getElementById('singleGlThumbSlider')) {
    var vendorSlider = tns({
        container: '#singleGlThumbSlider',
        speed: 800,
        slideBy: 'page',
        autoplay: false,
        autoplayButtonOutput: false,
        mouseDrag: true,
        rewind: true,
        gutter: 10,
        nav: false,
        controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
        responsive: {
            0: {
                items: 2
            },
            700: {
                items: 4
            },
            1000: {
                items: 6,
            }
        }
    });
}

//Mega menu slide active
const megaMenuSldSelector = document.querySelectorAll('.zcart-megamenu-slider');

if (megaMenuSldSelector.length > 0) {
    megaMenuSldSelector.forEach(slider => {
        const megaMenuSlider = tns({
            container: slider,
            speed: 800,
            slideBy: 'page',
            autoplay: false,
            autoplayButtonOutput: false,
            mouseDrag: true,
            rewind: false,
            controlsText: ["<span class='lnr lnr-chevron-left'></span>", "<span class='lnr lnr-chevron-right'></span>"],
            responsive: {
                640: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
}


//Search Tab
const searchTab = document.querySelectorAll('.search-tab-item');
const searchField = document.getElementById('zcart-search-field');
const searchArrow = document.querySelector('.header-search-arrow');

searchTab.forEach(item => {
    const tabWidth = item.offsetWidth;
    item.style.width = tabWidth + 3 + 'px';
});

searchTab.forEach(item => {
    item.addEventListener('click', (e) => {
        const tabId = e.target.getAttribute('id');

        const active = document.querySelector('.search-tabs .active');
        if (active) {
            active.classList.remove('active');
        }

        if (tabId == 'searchTab1') {

            searchField.placeholder = 'Enter a keyword to search products';
            searchArrow.style.left = '38px';
            document.getElementById('searchTab1').classList.add('active');

        } else if (tabId == 'searchTab2') {

            searchField.placeholder = 'Enter a keyword to search suppliers';
            searchArrow.style.left = '115px';
            document.getElementById('searchTab2').classList.add('active');

        } else if (tabId == 'searchTab3') {

            searchField.placeholder = 'For suppliers to search sourcing requests';
            searchArrow.style.left = '231px';
            document.getElementById('searchTab3').classList.add('active');

        }

    });
});


//Mobile Menu Trigger
const zcartMenuTrigger = document.querySelector('.mobile-menu-trigger');
const zcartMenuTriggerIcon = document.querySelector('.mobile-menu-trigger span');
const zcartCategoryMenu = document.querySelector('.main-categoires-menu');
const zcartMobileMenuRemove = document.querySelector('.mobile-menu-remove');
const zcartMobileBackdrop = document.querySelector('.mobile-menu-backdrop');
const zcartMobileSubmenu = document.getElementsByClassName('has-dropdown-megamenu');
const zcartMobileMoreSubmenu = document.getElementsByClassName('has-more-child-menu');

if (zcartMenuTrigger) {
    zcartMenuTrigger.addEventListener('click', (e) => {
        e.preventDefault();
        zcartCategoryMenu.classList.add('active');
        zcartMenuTrigger.classList.add('active');
        zcartMobileBackdrop.classList.add('active');
    });
}

if (zcartMobileMenuRemove) {
    zcartMobileMenuRemove.addEventListener('click', (e) => {
        e.preventDefault();
        zcartCategoryMenu.classList.remove('active');
        zcartMenuTrigger.classList.remove('active');
        zcartMobileBackdrop.classList.remove('active');
    });
}

//add icon on each submenu li on mobile menu
const zcartMobileMenuArr = Array.prototype.slice.call(zcartMobileSubmenu);
for (let i = 0; i < zcartMobileMenuArr.length; i++) {
    zcartMobileMenuArr[i].insertAdjacentHTML('afterbegin', '<span class="lnr lnr-chevron-right submenu-trigger"></span>');
}

//submenu trigger
const zcartMobileSubmenuTrigger = document.querySelectorAll('.submenu-trigger');

zcartMobileSubmenuTrigger.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();

        let targetParent = e.target.parentNode;

        if (targetParent.classList.contains('active')) {
            e.target.parentNode.classList.remove('active');
        } else {
            e.target.parentNode.classList.add('active');
        }
    });
});


//add icon on each more category submenu li on mobile menu
const zcartMobileMoreSubmenuArr = Array.prototype.slice.call(zcartMobileMoreSubmenu);
for (let i = 0; i < zcartMobileMoreSubmenuArr.length; i++) {
    zcartMobileMoreSubmenuArr[i].insertAdjacentHTML('afterbegin', '<span class="lnr lnr-chevron-right more-cat-sub-trigger"></span>');
}

//more category submenu trigger
const zcartMobileMoreCatSubmenuTrigger = document.querySelectorAll('.more-cat-sub-trigger');

zcartMobileMoreCatSubmenuTrigger.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();

        let targetParent = e.target.parentNode;

        if (targetParent.classList.contains('active')) {
            e.target.parentNode.classList.remove('active');
        } else {
            e.target.parentNode.classList.add('active');
        }
    });
});



/*Sticky Header*/
const header = document.getElementById('stickyMenu');
if (header) {
    addClassHeader = () => {
        header.classList.add("sticky");
    }

    removeClassHeader = () => {
        header.classList.remove("sticky");
    }

    window.addEventListener('scroll', function () {
        let getScrollposition = window.scrollY;
        if (getScrollposition > 36) {
            addClassHeader();
        } else {
            removeClassHeader();
        }
    });
}



/*Sticky Header Vendor Menu*/
const headerVendor = document.getElementById('stickyVendorMenu');
if (headerVendor) {
    addClassVendorHeader = () => {
        headerVendor.classList.add("sticky");
    }

    removeClassVendorHeader = () => {
        headerVendor.classList.remove("sticky");
    }

    window.addEventListener('scroll', function () {
        let getScrollposition = window.scrollY;
        if (getScrollposition > 184) {
            addClassVendorHeader();
        } else {
            removeClassVendorHeader();
        }
    });
}


/*Sticky Header Inner Common Menu*/
const headerCommonMenu = document.getElementById('stickyCommonMenu');
if (headerCommonMenu) {
    addClassVendorHeader = () => {
        headerCommonMenu.classList.add("sticky");
    }

    removeClassVendorHeader = () => {
        headerCommonMenu.classList.remove("sticky");
    }

    window.addEventListener('scroll', function () {
        let getScrollposition = window.scrollY;
        if (getScrollposition > 78) {
            addClassVendorHeader();
        } else {
            removeClassVendorHeader();
        }
    });
}


/*Sticky Header For Acount pages*/
const stickyAccountMenu = document.getElementById('stickyAccountMenu');
if (stickyAccountMenu) {
    addClassVendorHeader = () => {
        stickyAccountMenu.classList.add("sticky");
    }

    removeClassVendorHeader = () => {
        stickyAccountMenu.classList.remove("sticky");
    }

    window.addEventListener('scroll', function () {
        let getScrollposition = window.scrollY;
        if (getScrollposition > 78) {
            addClassVendorHeader();
        } else {
            removeClassVendorHeader();
        }
    });
}



/*Product list gallery*/
const productThumb = document.querySelectorAll(".product-gl-thumbs a");
const productGalleryPreview = document.getElementsByClassName("product-gallery-preview-img");
productThumb.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
    });

    item.addEventListener("mouseover", function (e) {
        // console.dir(e.target.parentNode.parentNode.parentNode.children[0].children[0]); 
        let zcartPreviewImage = e.target.getAttribute('data-src');
        e.target.parentNode.parentNode.parentNode.children[0].children[0].src = zcartPreviewImage;

    });
});


/*Product single page gallery*/
const glProductThumb = document.querySelectorAll(".small-preview");
const glProductGalleryPreview = document.querySelector("#single-gl-preview-img");
glProductThumb.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
    });

    item.addEventListener("mouseover", function (e) {
        const zcartPreviewImage = e.target.getAttribute('data-src');
        glProductGalleryPreview.src = zcartPreviewImage;
    });
});

//Tabs JS
window.addEventListener("load", function () {

    const myTabs = document.querySelectorAll(".zcart-tabs > li");
    function myTabClicks(tabClickEvent) {
        for (var i = 0; i < myTabs.length; i++) {
            myTabs[i].classList.remove("active");
        }
        var clickedTab = tabClickEvent.currentTarget;
        clickedTab.classList.add("active");
        tabClickEvent.preventDefault();
        var myContentPanes = document.querySelectorAll(".zcart-tab-pane");
        for (i = 0; i < myContentPanes.length; i++) {
            myContentPanes[i].classList.remove("active");
        }
        var anchorReference = tabClickEvent.target;
        var activePaneId = anchorReference.getAttribute("href");
        var activePane = document.querySelector(activePaneId);
        activePane.classList.add("active");
    }
    for (i = 0; i < myTabs.length; i++) {
        myTabs[i].addEventListener("click", myTabClicks)
    }
});

//Product Single Page Show More Categories
const showMoreCategories = document.getElementById('zcart-show-more-list');
const hideMoreCategories = document.getElementById('zcart-hide-more-list');
const showMoreList = document.getElementById('showMoreList');

if (showMoreCategories) {
    showMoreCategories.addEventListener('click', (e) => {
        e.preventDefault();
        showMoreList.classList.add('active');
        showMoreCategories.style.display = 'none';
    });

    hideMoreCategories.addEventListener('click', (e) => {
        e.preventDefault();
        showMoreList.classList.remove('active');
        showMoreCategories.style.display = 'block';
    });
}


//Sidebar Menu Dropdown
const zcartSidebarSubmenuTrigger = document.querySelectorAll('.sidebar-submenu-trigger');

zcartSidebarSubmenuTrigger.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();

        let targetParent = e.target.parentNode;

        if (targetParent.classList.contains('active')) {
            e.target.parentNode.classList.remove('active');
        } else {
            e.target.parentNode.classList.add('active');
        }
    });
});

//select all on cart page
const selectAll = document.querySelectorAll('.select-all');
selectAll.forEach(item => {

    item.addEventListener('click', (e) => {

        // console.dir(item.closest('table').querySelectorAll('input[type=checkbox]'));

        if (e.target.checked) {
            // var checkBox = document.querySelectorAll('input[type=checkbox]'); 
            var checkBox = item.closest('table').querySelectorAll('input[type=checkbox]');
            for (var i = 0; i < checkBox.length; i++) {
                if (checkBox[i].type == 'checkbox') {
                    checkBox[i].checked = true;
                }
            }
        } else {
            // var checkBox = document.querySelectorAll('input[type=checkbox]'); 
            var checkBox = item.closest('table').querySelectorAll('input[type=checkbox]');
            for (var i = 0; i < checkBox.length; i++) {
                if (checkBox[i].type == 'checkbox') {
                    checkBox[i].checked = false;
                }
            }
        }



    });
});


//Checkout page register fields
const createAccount = document.querySelector('.create-account');
const accoutnFields = document.querySelector('.create-account-fields');
if (createAccount) {
    createAccount.addEventListener('click', function () {
        if (this.checked) {
            accoutnFields.classList.add('active');
        } else {
            accoutnFields.classList.remove('active');
        }
    });
}


//Hover able Tabs JS
window.addEventListener("load", function () {

    const myTabs = document.querySelectorAll(".hover-tab-list li");
    function myTabClicks(tabClickEvent) {
        for (var i = 0; i < myTabs.length; i++) {
            myTabs[i].classList.remove("active");
        }
        var clickedTab = tabClickEvent.currentTarget;
        clickedTab.classList.add("active");
        tabClickEvent.preventDefault();
        var myContentPanes = document.querySelectorAll(".hover-tab-content-item");
        for (i = 0; i < myContentPanes.length; i++) {
            myContentPanes[i].classList.remove("active");
        }
        var anchorReference = tabClickEvent.target;
        var activePaneId = anchorReference.getAttribute("href");
        var activePane = document.querySelector(activePaneId);
        // console.log(activePane)
        activePane.classList.add("active");
    }
    for (i = 0; i < myTabs.length; i++) {
        myTabs[i].addEventListener("mouseover", myTabClicks)
    }

    //prevent mouse action
    for (i = 0; i < myTabs.length; i++) {
        myTabs[i].addEventListener("click", function (e) {
            e.preventDefault();
        });
    }
});


//Modal JS
var modals = document.querySelectorAll('[data-modal]');

modals.forEach(function (trigger) {
    trigger.addEventListener('click', function (event) {
        event.preventDefault();
        var modal = document.getElementById(trigger.dataset.modal);
        modal.classList.add('open');
        var exits = modal.querySelectorAll('.modal-exit');
        exits.forEach(function (exit) {
            exit.addEventListener('click', function (event) {
                event.preventDefault();
                modal.classList.remove('open');
            });
        });
    });
});


//Shop Page grid and list view
const shopView = document.querySelectorAll('[data-view]');

shopView.forEach(function (trigger) {
    trigger.addEventListener('click', function (event) {

        shopView.forEach(function (item) {
            item.classList.remove('active');
        });


        event.preventDefault();
        const productViewType = event.target.attributes['data-view'].value;
        const listGridView = document.querySelector('.zcart-dual-view');
        // event.target.classList.remove('active');
        if (productViewType == 'zcart-grid-view') {
            event.target.classList.add('active');
            listGridView.classList.add('zcart-grid-view');
            listGridView.classList.remove('zcart-list-view');
        } else {
            event.target.classList.add('active');
            listGridView.classList.remove('zcart-grid-view');
            listGridView.classList.add('zcart-list-view');
        }
    });
});




/*Vanilla JS Zoom Product Image*/
(function (window) {
    function define_library() {
        var vanillaZoom = {};
        vanillaZoom.init = function (el) {

            var container = document.querySelector(el);
            if (!container) {
                console.error('No container element. Please make sure you are using the right markup.');
                return;
            }

            // var firstSmallImage = container.querySelector('.small-preview');
            var zoomedImage = container.querySelector('#single-gl-preview-img');
            var zoomedPreview = container.querySelector('.gallery-zoom-preview');

            if (!zoomedImage) {
                console.error('No zoomed image element. Please make sure you are using the right markup.');
                return;
            }

            // Zoom image on mouse enter.
            zoomedImage.addEventListener('mouseenter', function (e) {
                zoomedPreview.style.display = 'block';
                zoomedPreview.style.backgroundImage = 'url(' + this.src + ')';
                zoomedPreview.style.backgroundSize = "250%";
            }, false);


            // Show different parts of image depending on cursor position.
            zoomedImage.addEventListener('mousemove', function (e) {
                zoomedPreview.style.display = 'block';
                // getBoundingClientReact gives us various information about the position of the element.
                var dimentions = this.getBoundingClientRect();

                // Calculate the position of the cursor inside the element (in pixels).
                var x = e.clientX - dimentions.left;
                var y = e.clientY - dimentions.top;

                // Calculate the position of the cursor as a percentage of the total width/height of the element.
                var xpercent = Math.round(100 / (dimentions.width / x));
                var ypercent = Math.round(100 / (dimentions.height / y));

                // Update the background position of the image.
                zoomedPreview.style.backgroundPosition = xpercent + '% ' + ypercent + '%';

            }, false);


            // When leaving the container zoom out the image back to normal size.
            zoomedImage.addEventListener('mouseleave', function (e) {
                zoomedPreview.style.display = 'none';
                zoomedPreview.style.backgroundSize = "cover";
                zoomedPreview.style.backgroundPosition = "center";
            }, false);

        }
        return vanillaZoom;
    }

    // Add the vanillaZoom object to global scope.
    if (typeof (vanillaZoom) === 'undefined') {
        window.vanillaZoom = define_library();
    }
    else {
        console.log("Library already defined.");
    }
})(window);

const zoomSingleGallery = document.querySelector('.single-product-gallery');
if (zoomSingleGallery) {
    vanillaZoom.init('.single-product-gallery');
}



/*****
 * Vendor Menu Trigger
 * *******/
const zcartVMenuTrigger = document.querySelector('.vmobile-menu-trigger');
const zcartVMenuArea = document.querySelector('.vendor-menu-area');
const zcartVMenuRemove = document.querySelector('.vmobile-menu-remove');
const zcartVHasSubMenu = document.querySelectorAll('.vendor-header .zcart-has-submenu');
if (zcartVMenuTrigger) {
    zcartVMenuTrigger.addEventListener('click', (e) => {
        e.preventDefault();
        zcartVMenuArea.classList.add('active');
        zcartVMenuTrigger.classList.add('active');
        zcartMobileBackdrop.classList.add('active');
    });
}

if (zcartVMenuRemove) {
    zcartVMenuRemove.addEventListener('click', (e) => {
        e.preventDefault();
        zcartVMenuArea.classList.remove('active');
        zcartVMenuTrigger.classList.remove('active');
        zcartMobileBackdrop.classList.remove('active');
    });
}

//add icon on each submenu li on mobile menu
const zcartVHasSubMenuArr = Array.prototype.slice.call(zcartVHasSubMenu);
for (let i = 0; i < zcartVHasSubMenuArr.length; i++) {
    zcartVHasSubMenuArr[i].insertAdjacentHTML('afterbegin', '<span class="lnr lnr-chevron-right vsubmenu-trigger"></span>');
}

//vendor submenu trigger
const zcartVMobileSubmenuTrigger = document.querySelectorAll('.vsubmenu-trigger');

zcartVMobileSubmenuTrigger.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();

        let targetParent = e.target.parentNode;

        if (targetParent.classList.contains('active')) {
            e.target.parentNode.classList.remove('active');
        } else {
            e.target.parentNode.classList.add('active');
        }
    });
});


//Left Sidebar Menu
const zcartFilterTrigger = document.querySelector('.left-sidebar-dropdown');
const zcartFilterCatList = document.querySelector('.left-sidebar-category-list');

if (zcartFilterCatList) {
    zcartFilterTrigger.addEventListener('click', (e) => {
        e.preventDefault();
        zcartFilterCatList.classList.toggle('active');
        zcartFilterTrigger.classList.toggle('active');
    });
}


//Accessable Tabs
if (document.querySelector('[data-directive=tabs]')) {
    (function (name, context, definition) {
        if (typeof define === 'function' && define.amd) {
            define(definition);
        }
        else if (typeof module !== 'undefined' && module.exports) {
            module.exports = definition();
        }
        else {
            context[name] = definition();
        }
    })('Tabs', this, function () {

        'use strict';

        /**
         * Tabs
         * @constructor
         * @param {HTMLElement} element
         */
        function Tabs(element) {
            var i, len;

            this.target = element;
            this.tabs = element.querySelectorAll('[data-behaviour=tab]');
            this.panels = [];

            for (i = 0, len = this.tabs.length; i < len; i++) {
                this.panels.push(document.getElementById(this.tabs[i].hash.replace('#', '')));
            }

            if (this.selectedIndex === undefined) {
                this._init();
            }
        }

        /**
         * Init
         * @private
         */
        Tabs.prototype._init = function () {
            var i;
            var self = this;

            this.target.setAttribute('role', 'tablist');

            for (i = this.tabs.length - 1; i >= 0; i--) {
                var tab = this.tabs[i];
                var panel = this.panels[i];
                var preSelected = tab.className.match(/\bis-selected\b/);
                var selected = i === 0 || preSelected || window.location.hash.replace('#', '') == panel.id;

                tab.setAttribute('role', 'tab');
                tab.setAttribute('aria-selected', selected);
                tab.setAttribute('aria-controls', tab.hash.replace('#', ''));

                panel.setAttribute('role', 'tabpanel');

                if (selected) {
                    this.selectedIndex = i;

                    if (!preSelected) {
                        tab.className += ' is-selected ';
                    }
                }
                else {
                    panel.style.display = 'none';
                }
            }

            this.clickHandler = function (e) {
                var target = e.srcElement || e.target;

                if (target.getAttribute('role') == 'tab') {

                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                    else {
                        e.returnValue = false;
                    }

                    self.toggle(target);
                }
            };

            this.keyHandler = function (e) {
                switch (e.keyCode) {
                    case 37:
                        if (self.tabs[self.selectedIndex - 1]) {
                            self.toggle(self.tabs[self.selectedIndex - 1]);
                        }
                        break;

                    case 39:
                        if (self.tabs[self.selectedIndex + 1]) {
                            self.toggle(self.tabs[self.selectedIndex + 1]);
                        }
                        break;
                }
            };

            if (this.target.addEventListener) {
                this.target.addEventListener('click', this.clickHandler, false);
                this.target.addEventListener('keyup', this.keyHandler, false);
            }
            else {
                this.target.attachEvent('onclick', this.clickHandler);
                this.target.attachEvent('onclick', this.keyHandler);
            }

        };

        /**
         * Toggle
         * @param {HTMLElement} tab
         */
        Tabs.prototype.toggle = function (tab) {
            var i, len;
            var panel = document.getElementById(tab.hash.replace('#', ''));

            tab.focus();

            this.tabs[this.selectedIndex].className = this.tabs[this.selectedIndex].className.replace('is-selected', '');
            this.tabs[this.selectedIndex].setAttribute('aria-selected', false);

            this.panels[this.selectedIndex].style.display = 'none';

            tab.className += ' is-selected ';
            tab.setAttribute('aria-selected', true);

            panel.style.display = '';

            // Find tab index
            for (i = 0, len = this.tabs.length; i < len; i++) {
                if (tab == this.tabs[i]) {
                    break;
                }
            }

            this.selectedIndex = i;
        };

        /**
         * Teardown
         */
        Tabs.prototype.teardown = function () {
            var i, len;

            this.target.removeAttribute('role');

            if (this.target.removeEventListener) {
                this.target.removeEventListener('click', this.clickHandler, false);
                this.target.removeEventListener('click', this.keyHandler, false);
            }
            else {
                // Presume legacy IE
                this.target.detachEvent('onclick', this.clickHandler);
                this.target.detachEvent('onclick', this.keyHandler);
            }

            for (i = 0, len = this.tabs.length; i < len; i++) {
                var tab = this.tabs[i];
                var panel = this.panels[i];

                tab.removeAttribute('role');
                tab.removeAttribute('aria-selected');
                tab.removeAttribute('aria-controls');

                panel.style.display = '';
                panel.removeAttribute('role');
            }

            delete this.selectedIndex;
        };

        return Tabs;

    });

    // You were going to wrap the above as an AMD/CommonJS module and load on demand, right?
    var instance = new Tabs(document.querySelector('[data-directive=tabs]'));
}

