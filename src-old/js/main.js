var Musa = function() {
    this.body = document.querySelector('body');
    this.menuToggle = document.getElementById('menu-toggle');
    this.sidebar = document.querySelector('.sidebar');
    this.sidebarMenuToggle = document.getElementById('sidebar-menu-toggle');
    this.allSidemenuLinks = document.querySelectorAll('#sidebar-menu .menu-section .nav-item a');
    this.allHasChildSidemenuLinks = document.querySelectorAll('#sidebar-menu .menu-section .has-child a');
    this.btnPrint = document.getElementById('btnPrint');
    this.invoice = document.getElementById('invoice');
    this.wizardProgress = document.getElementById('wizard-progress');
    this.stepContent = document.querySelectorAll('[data-opened-step]');
    this.wizardSubmit = document.getElementById('ButtonFinish');
    this.wizardNextButton = document.getElementById('ButtonNext');
    this.handleWizardPreviousButton = document.getElementById('ButtonPrevious');
    this.wizardTab1 = document.querySelector('[data-tab="Step1"]');
    this.wizardTab2 = document.querySelector('[data-tab="Step2"]');
    this.wizardTab3 = document.querySelector('[data-tab="Step3"]');
    this.wizardTab4 = document.querySelector('[data-tab="Step4"]');
    this.tableCollapsibleRow = document.getElementsByClassName('row-collapsible');
};

Musa.prototype.init = function(){
    this.events();
    this.getClosest();
    this.responsiveSidebarMenu();
    this.rippleEffect();
    this.materialFormFieldFilledState();
    this.collapseTable();
    this.wizardNavigation();
};

Musa.prototype.events = function() {
    if ( musa.body.contains(this.menuToggle) ){ this.menuToggle.addEventListener("click", musa.toggleMenu, false); }
    if ( musa.body.contains(this.sidebarMenuToggle )){ this.sidebarMenuToggle.addEventListener("click", musa.toggleMenu, false); }
    if ( musa.body.contains(this.btnPrint) ){ this.btnPrint.onclick =  function () { musa.printInvoice(); };}
    for ( var i = 0; i < musa.allHasChildSidemenuLinks.length; i++ ) { musa.allHasChildSidemenuLinks[i].addEventListener('click', this.openSidebarSubMenu, false); }
    if ( musa.body.contains( document.getElementById('ButtonPrevious' )) ) { musa.handleWizardPreviousButton.addEventListener("click", musa.handleWizardPrevious, false); }
    if ( musa.body.contains( musa.wizardNextButton ) ) { musa.wizardNextButton.addEventListener("click", musa.handleWizardNext, false); }
};

/*
 * Material form. This function keeps focus state of field if it's filled
 */
Musa.prototype.materialFormFieldFilledState = function() {
    var materialFormElement = document.querySelectorAll('.material-form .form-control');
    for (var i = 0; i < materialFormElement.length; i++) {
        materialFormElement[i].onchange = function () {
            this.classList.add('filled');
            if(this.value === ""){
                this.classList.remove('filled');
            }
        }
    }
};

/*
 * Form Wizard Navigation
 */
Musa.prototype.wizardNavigation = function() {
    if(musa.body.contains(musa.wizardTab1)){
        musa.wizardTab1.onclick = function () {
            document.querySelector('.wizard-navigation .nav-item.active').classList.remove('active');

            musa.wizardTab4.classList.remove('done');
            musa.wizardTab2.classList.remove('done');
            musa.wizardTab3.classList.remove('done');

            this.classList.add('active');

            musa.hideWizardSubmitButton();

            for( var i = 0; i < musa.stepContent.length; i++) {
                musa.stepContent[i].setAttribute('data-opened-step', 'false');
            }

            document.getElementById('Step1').setAttribute('data-opened-step', 'true');
            musa.wizardProgressBarNullWidth();
            musa.wizardNextButton.setAttribute('data-next-step', 'Step2');
            musa.handleWizardPreviousButton.setAttribute('data-prev-step', '');
        };
    }

    if(musa.body.contains(musa.wizardTab2)){
        musa.wizardTab2.onclick = function () {
            document.querySelector('.wizard-navigation .nav-item.active').classList.remove('active');

            musa.wizardTab3.classList.remove('done');
            musa.wizardTab4.classList.remove('done');
            musa.wizardTab1.classList.add('done');

            this.classList.add('active');

            musa.hideWizardSubmitButton();

            for( var i = 0; i < musa.stepContent.length; i++) {
                musa.stepContent[i].setAttribute('data-opened-step', 'false');
            }

            document.getElementById('Step2').setAttribute('data-opened-step', 'true');
            musa.wizardProgressBarOneThirdWidth();
            musa.wizardNextButton.setAttribute('data-next-step', 'Step3');
            musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step1');
        };
    }

    if(musa.body.contains(musa.wizardTab3)){
        musa.wizardTab3.onclick = function () {
            document.querySelector('.wizard-navigation .nav-item.active').classList.remove('active');

            musa.wizardTab4.classList.remove('done');
            musa.wizardTab1.classList.add('done');
            musa.wizardTab2.classList.add('done');

            this.classList.add('active');

            musa.hideWizardSubmitButton();

            for( var i = 0; i < musa.stepContent.length; i++) {
                musa.stepContent[i].setAttribute('data-opened-step', 'false');

            }

            document.getElementById('Step3').setAttribute('data-opened-step', 'true');
            musa.wizardProgressBarTwoThirdsWidth();

            musa.wizardNextButton.setAttribute('data-next-step', 'Step4');
            musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step2');
        };
    }

    if(musa.body.contains(musa.wizardTab4)){
        musa.wizardTab4.onclick = function () {
            document.querySelector('.wizard-navigation .nav-item.active').classList.remove('active');

            musa.wizardTab1.classList.add('done');
            musa.wizardTab2.classList.add('done');
            musa.wizardTab3.classList.add('done');

            this.classList.add('active');

            for( var i = 0; i < musa.stepContent.length; i++) {
                musa.stepContent[i].setAttribute('data-opened-step', 'false');
            }

            document.getElementById('Step4').setAttribute('data-opened-step', 'true');

            musa.showWizardSubmitButton();

            musa.wizardProgressBarFullWidth();
            musa.wizardNextButton.setAttribute('data-next-step', '');
            musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step3');
        };
    }
};

/*
 * Form Wizard. This function handles style and display changes for each next button click
 */
Musa.prototype.handleWizardNext = function() {

    var nextStep = musa.wizardNextButton.getAttribute('data-next-step'),
        current;
    // Set new step to display and turn off display of current step
    for( var i = 0; i < musa.stepContent.length; i++) {
        musa.stepContent[i].setAttribute('data-opened-step', 'false');
    }
    document.getElementById(nextStep).setAttribute('data-opened-step', 'true');

    if ( nextStep === 'Step2' ) {

        // Change the button name - we use this to keep track of which step to display on a click
        musa.wizardNextButton.setAttribute('data-next-step', 'Step3');
        musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step1');

        // Change background color on header to highlight new step
        current = musa.wizardTab2;
        current.classList.add('active');
        current.previousElementSibling.classList.remove('active');
        current.previousElementSibling.classList.add('done');

        musa.wizardProgressBarOneThirdWidth();

    }

    else if ( nextStep === 'Step3' ) {

        // Change the button name - we use this to keep track of which step to display on a click
        musa.wizardNextButton.setAttribute('data-next-step', 'Step4');
        musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step2');

        // Change background color on header to highlight new step
        current = musa.wizardTab3;
        current.classList.add('active');
        current.previousElementSibling.classList.remove('active');
        current.previousElementSibling.classList.add('done');

        musa.wizardProgressBarTwoThirdsWidth();

    }

    else if ( nextStep === 'Step4' ) {

        // Change the button name - we use this to keep track of which step to display on a click
        musa.wizardNextButton.setAttribute('data-next-step', '');
        musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step3');

        // Disable/enable buttons when reach start and review steps
        musa.showWizardSubmitButton();

        // Change background color on header to highlight new step
        current = musa.wizardTab4;
        current.classList.add('active');
        current.previousElementSibling.classList.remove('active');
        current.previousElementSibling.classList.add('done');

        musa.wizardProgressBarFullWidth();

    }

};

/*
 * Form Wizard. This function handles style and display changes for each previous button click
 */
Musa.prototype.handleWizardPrevious = function() {
    var previousStep = musa.handleWizardPreviousButton.getAttribute('data-prev-step'),
        current;

    // Set new step to display and turn off display of current step
    for( var i = 0; i < musa.stepContent.length; i++) {
        musa.stepContent[i].setAttribute('data-opened-step', 'false');
    }
    document.getElementById(previousStep).setAttribute('data-opened-step', 'true');

    if ( previousStep === 'Step1' ) {

        // Change the button name - we use this to keep track of which step to display on a click
        musa.wizardNextButton.setAttribute('data-next-step', 'Step2');
        musa.handleWizardPreviousButton.setAttribute('data-prev-step', '');

        // Change background color on header to highlight new step
        current = musa.wizardTab1;
        current.classList.add('active');
        current.nextElementSibling.classList.remove('active');
        current.nextElementSibling.classList.remove('done');

        musa.wizardProgressBarNullWidth();

    }

    else if ( previousStep === 'Step2' ) {

        // Change the button name - we use this to keep track of which step to display on a click
        musa.wizardNextButton.setAttribute('data-next-step', 'Step3');
        musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step1');

        // Change background color on header to highlight new step
        current = musa.wizardTab2;
        current.classList.add('active');
        current.nextElementSibling.classList.remove('active');
        current.nextElementSibling.classList.remove('done');

        musa.wizardProgressBarOneThirdWidth();

    }

    else if ( previousStep === 'Step3' ) {

        // Change the button name - we use this to keep track of which step to display on a click
        musa.wizardNextButton.setAttribute('data-next-step', 'Step4');
        musa.handleWizardPreviousButton.setAttribute('data-prev-step', 'Step2');

        // Disable/enable buttons when reach start and review steps
        musa.hideWizardSubmitButton();

        // Change background color on header to highlight new step
        current = musa.wizardTab3;
        current.classList.add('active');
        current.nextElementSibling.classList.remove('active');
        current.nextElementSibling.classList.remove('done');

        musa.wizardProgressBarTwoThirdsWidth();

    }
};

/*
 * Form Wizard. Show Wizard Submit Button
 */
Musa.prototype.showWizardSubmitButton = function() {
    musa.wizardSubmit.classList.add('show');
};

/*
 * Form Wizard. Hide Wizard Submit Button
 */
Musa.prototype.hideWizardSubmitButton = function() {
    if( musa.wizardSubmit.classList.contains('show')) {
        musa.wizardSubmit.classList.remove('show');
    }
};

/*
 * Form Wizard. Hide Wizard Progress bar
 */
Musa.prototype.wizardProgressBarNullWidth = function() {
    musa.wizardProgress.style.width = 0;
};

/*
 * Form Wizard. One Third Width Wizard Progress bar
 */
Musa.prototype.wizardProgressBarOneThirdWidth = function() {
    musa.wizardProgress.style.width = 33.33+'%';
};

/*
 * Form Wizard. Two Thirds Width Wizard Progress bar
 */
Musa.prototype.wizardProgressBarTwoThirdsWidth = function() {
    musa.wizardProgress.style.width = 66.66+'%';
};

/*
 * Form Wizard. Full Width Wizard Progress bar
 */
Musa.prototype.wizardProgressBarFullWidth = function() {
    musa.wizardProgress.style.width = 100+'%';
};

/*
 * Open sidebar sub menu
 */
Musa.prototype.openSidebarSubMenu = function() {
    var navOpenedItems = document.querySelectorAll('#sidebar-menu .menu-section .side-menu li.has-child.opened');
    for(var i=0; i < navOpenedItems.length; i++){
        if ( navOpenedItems[i] !== null && !isChild(this.parentNode, navOpenedItems[i])) {
            navOpenedItems[i].classList.remove('opened');
        }
    }

    if ( !(this.parentNode.classList.contains('opened')) ) {
        this.parentNode.classList.add('opened');
    }
    else{
        this.parentNode.classList.remove('opened');
    }

    function isChild (obj,parentObj){
        while (obj !== undefined && obj !== null && obj.tagName.toUpperCase() !== 'BODY'){
            if (obj === parentObj){
                return true;
            }
            obj = obj.parentNode;
        }
        return false;
    }
};

/*
 * Toggle Sidebar Menu
 */
Musa.prototype.toggleMenu = function() {
    if( musa.body.classList.contains('nav-sm')){
        var navActiveItems = document.querySelector('#sidebar-menu .menu-section .side-menu li.has-child.active');
        if(navActiveItems){
            navActiveItems.classList.add('opened');
        }
    }
    if( musa.body.classList.contains('nav-md')){
        var navOpenedItems = document.querySelector('#sidebar-menu .menu-section .side-menu li.has-child.opened');
        if(navOpenedItems){
            navOpenedItems.classList.remove('opened');
        }
    }
    musa.body.classList.toggle('nav-sm');
    musa.body.classList.toggle('nav-md');
    window.addEventListener("resize", function () {
        var windowWidth = window.innerWidth,
            documentHeight = document.documentElement.clientHeight;
        if(windowWidth < 576 && musa.body.classList.contains('nav-md')){
            musa.sidebar.style.height = documentHeight + "px";

            if(musa.body.classList.contains('fixed-body')){
                musa.body.classList.remove('fixed-body');
            }
            else{
                musa.body.classList.add('fixed-body');
            }
        }
    });
    var windowWidth = window.innerWidth,
        documentHeight = document.documentElement.clientHeight;
    if(windowWidth < 576) {
        musa.sidebar.style.height = documentHeight + "px";
        if(musa.body.classList.contains('fixed-body')){
            musa.body.classList.remove('fixed-body');
        }
        else {
            musa.body.classList.add('fixed-body');
        }
    }
};

/*
 * Responsive sidebar menu
 */
Musa.prototype.responsiveSidebarMenu = function() {
    window.addEventListener("resize", function () {
        var windowWidth = window.innerWidth;
        if(windowWidth < 768 && musa.body.classList.contains('nav-md')){
            document.body.classList.remove('nav-md');
            document.body.classList.add('nav-sm');
        }
    });
    var windowWidth = window.innerWidth;
    if(windowWidth < 768 && musa.body.classList.contains('nav-md')){
        document.body.classList.remove('nav-md');
        document.body.classList.add('nav-sm');
    }
};


/*
 * Collapse table
 */
Musa.prototype.collapseTable = function() {
    for (var i= 0; i< musa.tableCollapsibleRow.length; i++){
        musa.tableCollapsibleRow[i].onclick = function () {
            var tableCollapsibleShownRow = document.querySelectorAll('.row-collapsible.shown');
            if(this.classList.contains('shown')){
                this.classList.remove('shown');
            }
            else if(!this.classList.contains('shown')){
                if( tableCollapsibleShownRow[0] != null ){
                    tableCollapsibleShownRow[0].classList.remove('shown');
                }
                this.classList.add('shown');
            }
        };
    }
};

/*
 * Ripple effect effect for button
 */
Musa.prototype.rippleEffect = function() {
    var rippleElems = document.querySelectorAll(".ripple");

    var animate = function(e) {
        if (this.querySelectorAll(".ripple-effect").length === 0) {
            var span = document.createElement("span");
            span.classList.add("ripple-effect");
            this.appendChild(span);
            setTimeout(function() { span.parentNode.removeChild(span); }, 2000);
        }

        var rippleEffect = this.querySelectorAll(".ripple-effect")[0];

        rippleEffect.classList.remove("animate");

        if (!rippleEffect.offsetHeight && !rippleEffect.offsetWidth) {
            var d = Math.max(this.offsetHeight, this.offsetWidth);
            rippleEffect.style.height = d + "px";
            rippleEffect.style.width = d + "px";
        }

        var rect = this.getBoundingClientRect();

        var offset = {
            top: rect.top + window.pageYOffset,
            left: rect.left + window.pageXOffset
        };

        var x = e.pageX - offset.left - rippleEffect.offsetWidth / 2;
        var y = e.pageY - offset.top - rippleEffect.offsetHeight / 2;

        rippleEffect.style.top = y + "px";
        rippleEffect.style.left = x + "px";
        rippleEffect.classList.add("animate");
    };
    for (var i = 0; i < rippleElems.length; i++) {
        rippleElems[i].addEventListener('click', animate, false);
    }
};

/*
 * Get parent elements
 */
Musa.prototype.getParents = function (el, parentSelector) {
    // If no parentSelector defined will bubble up all the way to *document*
    if (parentSelector === undefined) {
        parentSelector = document;
    }

    var parents = [];
    var p = el.parentNode;

    while (p !== parentSelector) {
        var o = p;
        parents.push(o);
        p = o.parentNode;
    }
    parents.push(parentSelector); // Push that parentSelector you wanted to stop at

    return parents;
};

/*
 * Get closest element
 */
Musa.prototype.getClosest = function (elem, selector) {

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
    }

    // Get the closest matching element
    for ( ; elem && elem !== document; elem = elem.parentNode ) {
        if ( elem.matches( selector ) ) return elem;
    }
    return null;
};

/*
 * Print
 */
Musa.prototype.printInvoice = function() {
    window.print();
};

var musa = new Musa();
musa.init();


var Slider = function() {
    this.body = document.querySelector('body');
};

Slider.prototype.init = function(){
    this.slider();
};

/*
 * Sliders
 */
Slider.prototype.slider = function() {
    var head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style');

    style.type = 'text/css';
    var inputs = document.querySelectorAll('input[data-attr="range-input"]');

    var onInput = function () {
        var color = this.getAttribute('data-color');
        var classNAME = this.className;
        var val = (this.value - this.getAttribute('min')) / (this.getAttribute('max') - this.getAttribute('min'));

        var label =  this.parentNode.querySelector('label[data-label="'+classNAME+'-label"]');
        label.innerHTML = this.value;

        var parentContainer = musa.getClosest(this, '.slider');

        if(parentContainer.classList.contains('horizontal-slider')){
            label.style.left = "calc( +" + val*100 + "% - 12px";
        }
        if(parentContainer.classList.contains('horizontal-slider-labeled-bottom')){
            label.style.top = 50+"px";
        }
        if(parentContainer.classList.contains('vertical-slider')){
            label.style.bottom = val*100 + 38 + "px";
        }
        if(parentContainer.classList.contains('vertical-slider-labeled-right')){
            label.style.marginLeft = 78+"px";
        }
        if(parentContainer.classList.contains('rectangular-slider')){
            label.style.bottom = val*100 + 38 + "px";
        }

        this.style.height = 2 + "px";

        if(localStorage.getItem('customizedColors') === null){

            var css = slider.sliderColor.call( this, val, color, parentContainer, label);
            if (style.styleSheet) {
                style.styleSheet.cssText += css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
        }
    };

    var onChange = function() {
        var color = this.getAttribute('data-color');
        var classNAME = this.className;
        var val = (this.value - this.getAttribute('min')) / (this.getAttribute('max') - this.getAttribute('min'));

        var label =  this.parentNode.querySelector('label[data-label="'+classNAME+'-label"]');
        label.innerHTML = this.value;

        var parentContainer = musa.getClosest(this, '.slider');
        if(localStorage.getItem('customizedColors') === null){
            if(parentContainer.classList.contains('horizontal-slider')){
                label.style.left = "calc( +" + val*100 + "% - 12px)";
                label.style.borderColor = color;
            }
            if(parentContainer.classList.contains('horizontal-slider-labeled-bottom')){
                label.style.top = 70+"px";
            }
            if(parentContainer.classList.contains('rounded-slider')){
                label.style.color = color;
                label.style.borderColor = color;
            }
            if(parentContainer.classList.contains('vertical-slider')){
                label.style.bottom = val*100 + 20 + "px";
                label.style.borderColor = color;
            }
            if(parentContainer.classList.contains('vertical-slider-labeled-right')){
                label.style.marginLeft = 64+"px";
            }
            if(parentContainer.classList.contains('rectangular-slider')){
                label.style.bottom = val*100 + 20 + "px";
                label.style.backgroundColor = color;
            }
        }
    };

    head.appendChild(style);
    for (var i = 0; i < inputs.length; i++){
        // Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;
        if(!isIE){
            inputs[i].addEventListener('input', onInput, false);
            var eventInput = new Event('input');
            inputs[i].dispatchEvent(eventInput);
        }
        else {
            inputs[i].addEventListener('change', onChange, false);
            var event = document.createEvent("HTMLEvents");
            event.initEvent("change",true,false);
            inputs[i].dispatchEvent(event);
        }
    }
};


/*
* Slider Color
 */
Slider.prototype.sliderColor = function ( val, color, parentContainer, label) {
    this.style.background = '-webkit-gradient(linear, left top, right top, '
        + 'color-stop(' + val + ', ' + color + '), '
        + 'color-stop(' + val + ', #ddd)'
        + ')';
    if(parentContainer.classList.contains('horizontal-slider')){
        label.style.borderColor = color;
    }
    if(parentContainer.classList.contains('rounded-slider')){
        label.style.color = color;
        label.style.borderColor = color;
    }
    if(parentContainer.classList.contains('vertical-slider')){
        label.style.borderColor = color;
    }
    if(parentContainer.classList.contains('rectangular-slider')){
        label.style.backgroundColor = color;
    }
    var id = this.getAttribute('id'),
        classNAME = this.className,
        css = 'input#'+id+"."+classNAME+'::-moz-range-track { background: -webkit-gradient(linear, left top, right top, '
            + 'color-stop(' + val + ', ' + color + '), '
            + 'color-stop(' + val + ', #ddd)'
            + '); height: 2px;}';

    return css;
};

var slider = new Slider();
slider.init();


