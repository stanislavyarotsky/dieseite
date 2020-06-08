//smooth scroll
$('.nav-item a').click(function(e) {
    console.log('test');
    //    e.preventDefault();
    $('html,body').animate({
        scrollTop: $(this.hash).offset().top
    }, 1800);
});

//scrollspy
$('body').scrollspy({
    target: "#menu-menu-1",
    offset: 50
});

//$(function () {
//    $('link').click(function () {
//        let speed = 91000;
//        const href = $(this).attr("href");
//        const target = $(href == "#" || href == "" ? "html" : href);
//        const position = target.offset().top;
//        $("html, body").animate({
//            scrollTop: position
//        }, speed, "swing");
//        return false;
//    });
//});

//smart navbar animation
window.addEventListener('load', () => {
    let nav = document.querySelector('.navbar');
    let links = document.querySelectorAll('.navbar .nav-item a');
    let bool = false;

    links.forEach((l) => {
        l.addEventListener('click', prom);
    });

    function prom() {
        let promise = new Promise((resolve, reject) => {
            bool = true;
            setTimeout(() => {
                resolve(bool)
            }, 1000)
        });
        promise.then((bool) => {
            bool = false;
        })
    }

    window.addEventListener('scroll', () => {
        let wpyo = window.pageYOffset;

        if (wpyo > 500 && bool === false) {
            nav.classList.remove('active');
            bool = true;
        } else if (wpyo < 200 && bool === true) {
            nav.classList.add('active');
            bool = false;
        }
    });

    nav.addEventListener('mouseover', (e) => {
        if (bool === true) {
            nav.classList.add('active');
        }
    });

    nav.addEventListener('mouseleave', (e) => {
        if (bool === true) {
            nav.classList.remove('active');
        }
    });
})


//parallax anm mode fx
window.addEventListener('load', () => {
    $(window).scroll(function() {
        $(".anm_mod").each(function() {
            const position = $(this).offset().top;
            const scroll = $(window).scrollTop();
            const windowHeight = $(window).height();
            if (scroll > position - (windowHeight + 300)) {
                $(this).addClass("active");
            }
            if (scroll < 100) {
                $(this).removeClass("active");
            }
        });
    });
})

/*change navbar color by scrolling*/

window.addEventListener('load', () => {
    $(window).scroll(function() {
        if ($(document).scrollTop() > 2500) {
            $('.navbar').addClass('color-change-1');
        } else {
            $('.navbar').removeClass('color-change-1');
        }
    });

    $(window).scroll(function() {
        if ($(document).scrollTop() > 6000) {
            $('.navbar').addClass('color-change-2');
        } else {
            $('.navbar').removeClass('color-change-2');
        }
    });
})


//style werke
window.addEventListener('load', () => {
    //gal
    let imgs = document.querySelectorAll('.werk img');
    let descs = document.querySelectorAll('.werk .desc');

    imgs.forEach((img) => {
        descs.forEach((desc) => {
            desc.addEventListener('mouseover', (e) => {
                desc.nextElementSibling.classList.add('active')
            })
            desc.addEventListener('mouseleave', (e) => {
                desc.nextElementSibling.classList.remove('active')
            })
        })
    })
})

//read more drop - down
document.addEventListener('DOMContentLoaded', () => {
    let showAllPojects = document.querySelector('.read-more-toggle');
    let closeAllProjects = document.querySelector('.closeWerke');
    showAllPojects.addEventListener('click', () => {
        showAllPojects.nextElementSibling.classList.toggle('show');
        showAllPojects.classList.toggle('active');
        showAllPojects.lastElementChild.classList.toggle('active');
    });
    closeAllProjects.addEventListener('click', () => {
        closeAllProjects.classList.remove('active');
        closeAllProjects.closest('.read-more-content').classList.remove('show');
        showAllPojects.classList.remove('active');
        showAllPojects.lastElementChild.classList.remove('active');
    })
})

// input text 
window.addEventListener('load', () => {
    $('.form-control[placeholder]').focus(function() {
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function() {
        $(this).attr('placeholder', $(this).attr('data-text'));
    })
})


//type it


//filter gallery
filterSelection("all")

function filterSelection(c) {
    let x, i;
    x = document.getElementsByClassName("werk");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    let i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    let i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

//add, toggle, remove 
window.addEventListener('load', () => {
    //nav links
    let navbarCollapse = document.querySelector('.navbar-collapse');
    let links1 = document.querySelectorAll('.nav .nav-item a');
    links1.forEach((link, index) => {
        link.addEventListener('click', (e) => {
            navbarCollapse.classList.remove('show');
            toggleIcon.classList.remove('active')
            let current = document.querySelectorAll('.nav-item a.active');
            let act = new Activator(link, index, current);
            //CHOOSE PROPER FUNC
            act.switch();
        });
    });

    let btnFilter = document.querySelectorAll('#werke .btn');
    btnFilter.forEach((bF, index) => {
        bF.addEventListener('click', (e) => {
            let current = document.querySelectorAll('#werke .btn.active');
            let act = new Activator(bF, index, current);
            act.switch();
        })
    })

    //burger to cross
    let toggleBtn = document.querySelector('.navbar-toggler');
    let toggleIcon = document.getElementById('toggle-icon');
    toggleBtn.addEventListener('click', (e) => {
        let act = new Activator(toggleIcon);
        act.toggle();
    });

    //Arrow setTimeout
    let arrow = document.querySelector('#arrow-down');
    let sT6000 = setTimeout(() => {
        let act = new Activator(arrow);
        act.add();
    }, 3000);

    let arrhref = arrow.getAttribute('href');
    arrhref = arrow.closest('#home').nextElementSibling.getAttribute('id');
    arrow.setAttribute('href', "#" + arrhref);

    function Activator(item, index, current) {
        this.item = item;
        this.current = current;
        this.index = index;
    }

    //ADD TOGGLE CLASS
    Activator.prototype.toggle = function() {
        this.item.classList.toggle('active');
    }

    //SWITCH ADDED CLASS
    Activator.prototype.switch = function() {
        if (this.current.length > 0) {
            this.current[0].className = this.current[0].className.replace(" active", "");
        }
        this.item.className += " active";
    }

    //JUST ADD CLASS
    Activator.prototype.add = function() {
        this.item.classList.add('active')
    }

    //JUST REMOVE CLASS
    Activator.prototype.remove = function() {
        this.item.classList.remove('active')
    }

})

//glue the header
window.addEventListener('load', () => {
    let h1 = document.querySelector('h1');
    let a = new Promise((resolve, reject) => {
        setTimeout(() => {
            h1.classList.add('active');
            resolve(h1);
        }, 1000)
    })

    a.then((h1) => {
        let b = new Promise((resolve, reject) => {
            setTimeout(() => {
                h1.classList.remove('active');
                //myHeader.classList.remove('glue');
            }, 2200);
        })
    });
})


// let btnContact = document.querySelector('#myForm .btn').addEventListener('click', (e) => {
//     e.preventDefault();
// });