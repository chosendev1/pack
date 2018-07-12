var ThemeSettings = function() {
    this.body = document.getElementsByTagName('body')[0];
    this.head = document.head || document.getElementsByTagName('head')[0];

    this.allSidemenuLinks = document.querySelectorAll('#sidebar-menu .menu-section .nav-item a');
    this.fullPath = location.href.split('#')[0];

    this.btnPrevSettings = document.getElementById('btnPrevSettings');
    this.btnCancelSettings = document.getElementById('btnCancelSettings');
    this.btnSaveSettings = document.getElementById('btnSaveSettings');
    this.btnOpenSaveSettingsModal = document.getElementById('btnOpenSaveSettingsModal');

    this.btnActivateRightSidebar = document.getElementById('activate-right-sidebar');
    this.btnActivateLeftSidebar = document.getElementById('activate-left-sidebar');
    this.btnActivateFixedHeader = document.getElementById('activate-fixed-header');
    this.btnActivateRtlContent = document.getElementById('activate-rtl-content');

    this.btnActivateLightSidebar = document.getElementById('activate-light-sidebar');
    this.btnActivateDarkSidebar = document.getElementById('activate-dark-sidebar');
    this.btnActivateLightHeader = document.getElementById('activate-light-header');
    this.btnActivateDarkHeader = document.getElementById('activate-dark-header');

    this.btnActivateGreenTheme = document.getElementById('activate-green');
    this.btnActivateRedTheme = document.getElementById('activate-red');
    this.btnActivateCyanTheme = document.getElementById('activate-cyan');
    this.btnActivatePurpleTheme = document.getElementById('activate-purple');
    this.btnActivateOrangeTheme = document.getElementById('activate-orange');
    this.btnActivateGreyTheme = document.getElementById('activate-grey');
    this.btnActivateCustomTheme = document.getElementById('activate-custom');

    this.availableColors = ['theme-green', 'theme-red', 'theme-orange', 'theme-purple', 'theme-cyan', 'theme-grey', 'theme-custom'];
    this.settingsWrapper = document.getElementById('builder');
    this.colorsSettings = document.getElementById('color-settings');
    this.defaultColorSettings = document.getElementById('defaultColorSettings');
    this.cssLink = document.querySelector('link[data-role="color-settings"]');
    this.cusomizedColorsValues = document.getElementsByClassName('jscolor');

    this.inputPrimaryBackground = document.getElementById('primary-color');
    this.inputSecondaryBackground = document.getElementById('secondary-color');
    this.inputSuccessBackground = document.getElementById('success-color');
    this.inputDangerBackground = document.getElementById('danger-color');
    this.inputInfoBackground = document.getElementById('info-color');
    this.inputWarningBackground = document.getElementById('warning-color');
    this.inputLightBackground = document.getElementById('light-color');
    this.inputDarkBackground = document.getElementById('dark-color');

    this.inputPrimaryText = document.getElementById('primary-text-color');
    this.inputSecondaryText = document.getElementById('secondary-text-color');
    this.inputSuccessText = document.getElementById('success-text-color');
    this.inputDangerText = document.getElementById('danger-text-color');
    this.inputInfoText = document.getElementById('info-text-color');
    this.inputWarningText = document.getElementById('warning-text-color');
    this.inputLightText = document.getElementById('light-text-color');
    this.inputDarkText = document.getElementById('dark-text-color');

    this.primaryColorValue = document.getElementById('primaryColorValue');
    this.primaryDarkerColorValue = document.getElementById('primaryDarkerColorValue');
    this.primaryDarkColorValue = document.getElementById('primaryDarkColorValue');
    this.primaryLighterColorValue = document.getElementById('primaryLighterColorValue');
    this.primaryLightColorValue = document.getElementById('primaryLightColorValue');
    this.primaryTextColorValue = document.getElementById('primaryTextColorValue');

    this.successColorValue = document.getElementById('successColorValue');
    this.successDarkerColorValue = document.getElementById('successDarkerColorValue');
    this.successDarkColorValue = document.getElementById('successDarkColorValue');
    this.successLighterColorValue = document.getElementById('successLighterColorValue');
    this.successLightColorValue = document.getElementById('successLightColorValue');
    this.successTextColorValue = document.getElementById('successTextColorValue');

    this.secondaryColorValue = document.getElementById('secondaryColorValue');
    this.secondaryDarkerColorValue = document.getElementById('secondaryDarkerColorValue');
    this.secondaryDarkColorValue = document.getElementById('secondaryDarkColorValue');
    this.secondaryLighterColorValue = document.getElementById('secondaryLighterColorValue');
    this.secondaryLightColorValue = document.getElementById('secondaryLightColorValue');
    this.secondaryTextColorValue = document.getElementById('secondaryTextColorValue');

    this.infoColorValue = document.getElementById('infoColorValue');
    this.infoDarkerColorValue = document.getElementById('infoDarkerColorValue');
    this.infoDarkColorValue = document.getElementById('infoDarkColorValue');
    this.infoLighterColorValue = document.getElementById('infoLighterColorValue');
    this.infoLightColorValue = document.getElementById('infoLightColorValue');
    this.infoTextColorValue = document.getElementById('infoTextColorValue');

    this.dangerColorValue = document.getElementById('dangerColorValue');
    this.dangerDarkerColorValue = document.getElementById('dangerDarkerColorValue');
    this.dangerDarkColorValue = document.getElementById('dangerDarkColorValue');
    this.dangerLighterColorValue = document.getElementById('dangerLighterColorValue');
    this.dangerLightColorValue = document.getElementById('dangerLightColorValue');
    this.dangerTextColorValue = document.getElementById('dangerTextColorValue');

    this.warningColorValue = document.getElementById('warningColorValue');
    this.warningDarkerColorValue = document.getElementById('warningDarkerColorValue');
    this.warningDarkColorValue = document.getElementById('warningDarkColorValue');
    this.warningLighterColorValue = document.getElementById('warningLighterColorValue');
    this.warningLightColorValue = document.getElementById('warningLightColorValue');
    this.warningTextColorValue = document.getElementById('warningTextColorValue');

    this.lightColorValue = document.getElementById('lightColorValue');
    this.lightDarkerColorValue = document.getElementById('lightDarkerColorValue');
    this.lightDarkColorValue = document.getElementById('lightDarkColorValue');
    this.lightLighterColorValue = document.getElementById('lightLighterColorValue');
    this.lightLightColorValue = document.getElementById('lightLightColorValue');
    this.lightTextColorValue = document.getElementById('lightTextColorValue');

    this.darkColorValue = document.getElementById('darkColorValue');
    this.darkDarkerColorValue = document.getElementById('darkDarkerColorValue');
    this.darkDarkColorValue = document.getElementById('darkDarkColorValue');
    this.darkLighterColorValue = document.getElementById('darkLighterColorValue');
    this.darkLightColorValue = document.getElementById('darkLightColorValue');
    this.darkTextColorValue = document.getElementById('darkTextColorValue');

    this.rangeInputs = document.querySelectorAll('input[data-attr="range-input"]');
};

ThemeSettings.prototype.init = function(){
    this.toggleSettings();
    this.themeColors('theme-green', 'green');
    this.lightenDarkenColor();
    this.events();
    this.windowOnload();
};

ThemeSettings.prototype.events = function() {

    if(document.body.contains(themeSettings.settingsWrapper)){

        this.btnActivateGreenTheme.onclick = function () { themeSettings.themeColors('theme-green', 'green'); };
        this.btnActivatePurpleTheme.onclick = function () { themeSettings.themeColors('theme-purple', 'purple'); };
        this.btnActivateRedTheme.onclick = function () { themeSettings.themeColors('theme-red', 'red'); };
        this.btnActivateOrangeTheme.onclick = function () { themeSettings.themeColors('theme-orange', 'orange'); };
        this.btnActivateGreyTheme.onclick = function () { themeSettings.themeColors('theme-grey', 'grey'); };
        this.btnActivateCyanTheme.onclick = function () { themeSettings.themeColors('theme-cyan', 'cyan'); };
        this.btnActivateCustomTheme.onchange = function () { themeSettings.customThemeColor();themeSettings.themeColors('theme-custom', 'custom'); };
        this.btnActivateCustomTheme.onclick = function () { themeSettings.themeColors('theme-custom', 'custom'); };

        this.inputPrimaryBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('primary', this.jscolor); };
        this.inputSecondaryBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('secondary', this.jscolor); };
        this.inputSuccessBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('success', this.jscolor); };
        this.inputInfoBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('info', this.jscolor); };
        this.inputDangerBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('danger', this.jscolor); };
        this.inputWarningBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('warning', this.jscolor); };
        this.inputLightBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('light', this.jscolor); };
        this.inputDarkBackground.onchange = function () { themeSettings.updatePrevBackgroundColor('dark', this.jscolor); };

        this.inputPrimaryText.onchange = function () { themeSettings.updatePrevTextColor('primary', this.jscolor); };
        this.inputSecondaryText.onchange = function () { themeSettings.updatePrevTextColor('secondary', this.jscolor); };
        this.inputSuccessText.onchange = function () { themeSettings.updatePrevTextColor('success', this.jscolor); };
        this.inputInfoText.onchange = function () { themeSettings.updatePrevTextColor('info', this.jscolor); };
        this.inputDangerText.onchange = function () { themeSettings.updatePrevTextColor('danger', this.jscolor); };
        this.inputWarningText.onchange = function () { themeSettings.updatePrevTextColor('warning', this.jscolor); };
        this.inputLightText.onchange = function () { themeSettings.updatePrevTextColor('light', this.jscolor); };
        this.inputDarkText.onchange = function () { themeSettings.updatePrevTextColor('dark', this.jscolor); };

        this.btnPrevSettings.addEventListener("click", this.prevSettings, false);
        this.btnCancelSettings.addEventListener("click", this.cancelSettings, false);
        this.btnSaveSettings.addEventListener("click", this.saveSettings, false);
        this.btnOpenSaveSettingsModal.addEventListener("click", this.updateModalContent, false);

        this.btnActivateRightSidebar.addEventListener("click", this.activateRightSidebar, false);
        this.btnActivateLeftSidebar.addEventListener("click", this.activateLeftSidebar, false);
        this.btnActivateFixedHeader.addEventListener("click", this.activateFixedHeader, false);
        this.btnActivateRtlContent.addEventListener("click", this.activateRtlContent, false);
        this.btnActivateLightSidebar.addEventListener("click", this.activateLightSidebar, false);
        this.btnActivateDarkSidebar.addEventListener("click", this.activateDarkSidebar, false);
        this.btnActivateLightHeader.addEventListener("click", this.activateLightHeader, false);
        this.btnActivateDarkHeader.addEventListener("click", this.activateDarkHeader, false);
    }

};

/*
* Set functions after page load
*/
ThemeSettings.prototype.windowOnload = function() {
    window.onload = function () {
        themeSettings.checkLocalStorage();
        themeSettings.activateSidebarItem();
    };

};

/*
 * Keep active class on sidebar-menu items when window onload
 */
ThemeSettings.prototype.activateSidebarItem = function() {
    for(var i = 0; i < this.allSidemenuLinks.length; i++) {
        if(this.allSidemenuLinks[i].href.split("#")[0] == this.fullPath) {
            var parent = this.allSidemenuLinks[i].parentNode,
                parentNavItem = musa.getClosest(this.allSidemenuLinks[i], '.nav-item'),
                parents = musa.getParents(this.allSidemenuLinks[i]),
                nodes = parentNavItem.childNodes;
            parentNavItem.classList.add('active');

            setTimeout(function() {
                if(musa.body.classList.contains('nav-md')){
                    for(var j = 0; j < nodes.length; j++) {
                        if ( nodes[j].nodeName.toLowerCase() == 'ul' ) {
                            parentNavItem.classList.add('opened');
                            parent.classList.add('active-child');
                        }
                    }
                    for(var k=0; k < parents.length; k++){
                        if( parents[k].classList !== undefined && parents[k].classList.contains('has-child') ){
                            parents[k].classList.add('opened');
                        }
                    }
                }
            }, 100);
        }
    }
};

ThemeSettings.prototype.updatePrevBackgroundColor = function(color, jscolor) {
    var currentPrevElem = document.getElementById('btn-'+ color +'-prev');
    currentPrevElem.style.backgroundColor = '#' + jscolor;
};

ThemeSettings.prototype.updatePrevTextColor = function(color, jscolor) {
    var currentPrevElem = document.getElementById('btn-'+color+'-prev');
    currentPrevElem.style.color = '#' + jscolor;
};
/*
 * Update settings modal content
 */
ThemeSettings.prototype.updateModalContent = function() {
    if(document.body.contains(themeSettings.defaultColorSettings)){
        document.getElementById('customized-css').innerHTML = themeSettings.updateCssStringColors(themeSettings.defaultColorSettings.text);
    }
    document.getElementById('customized-body-classlist').innerHTML = document.body.classList;
};

/*
 * Toggle settings window
 */
ThemeSettings.prototype.toggleSettings = function() {
    if(document.body.contains(document.getElementById('builder-toggle'))){
        document.getElementById('builder-toggle').onclick = function () {
            themeSettings.settingsWrapper.classList.toggle('open');
        };
        document.getElementById('builder-close').onclick = function () {
            themeSettings.settingsWrapper.classList.toggle('open');
        }
    }
};

ThemeSettings.prototype.bodyRemoveAddClass = function(classname1, classname2) {
    this.body.classList.remove(classname1);
    this.body.classList.add(classname2);
};
/*
 * Layout view settings
 */
ThemeSettings.prototype.activateRightSidebar = function() {
    themeSettings.bodyRemoveAddClass('rtl', 'right-sidebar');
    themeSettings.btnActivateRtlContent.classList.remove('active');
    themeSettings.btnActivateLeftSidebar.classList.remove('active');
    this.classList.add('active');
};

ThemeSettings.prototype.activateLeftSidebar = function() {
    themeSettings.body.classList.remove('right-sidebar', 'rtl');
    themeSettings.btnActivateRtlContent.classList.remove('active');
    themeSettings.btnActivateRightSidebar.classList.remove('active');
    this.classList.add('active');
};

ThemeSettings.prototype.activateFixedHeader = function() {
    themeSettings.body.classList.toggle('fixed-header');
    this.classList.toggle('active');
};

ThemeSettings.prototype.activateRtlContent = function() {
    themeSettings.bodyRemoveAddClass('right-sidebar', 'rtl');
    themeSettings.btnActivateRightSidebar.classList.remove('active');
    themeSettings.btnActivateLeftSidebar.classList.remove('active');
    this.classList.add('active');
};

/*
 * Customize sidebar color
 */
ThemeSettings.prototype.activateDarkSidebar = function() {
    themeSettings.body.classList.add('dark-sidebar');
    themeSettings.btnActivateLightSidebar.classList.remove('active');
    this.classList.add('active');
};

ThemeSettings.prototype.activateLightSidebar = function() {
    themeSettings.body.classList.remove('dark-sidebar');
    themeSettings.btnActivateDarkSidebar.classList.remove('active');
    this.classList.add('active');
};

/*
 * Customize header color
 */
ThemeSettings.prototype.activateLightHeader = function() {
    themeSettings.body.classList.add('light-header');
    themeSettings.btnActivateDarkHeader.classList.remove('active');
    this.classList.add('active');
};

ThemeSettings.prototype.activateDarkHeader = function() {
    if(themeSettings.body.classList.contains('light-header')){
        themeSettings.body.classList.remove('light-header');
        themeSettings.btnActivateLightHeader.classList.remove('active');
        this.classList.add('active');
    }
};

/*
 * Customize custom color of theme
 */
ThemeSettings.prototype.customThemeColor = function() {
    var style = document.createElement('style'),
        styleSheets = document.styleSheets,
        css = themeSettings.updateCssStringColors(themeSettings.colorsSettings.text);
    style.type = 'text/css';
    style.setAttribute('data-role','customized-colors');

    if (style.styleSheet){
        style.styleSheet.cssText = css;
    } else {
        style.appendChild(document.createTextNode(css));
    }
    themeSettings.head.appendChild(style);
};

/*
 * Customize main color of theme
 */
ThemeSettings.prototype.themeColors = function(themeName, color) {
    if(document.body.contains(themeSettings.settingsWrapper)){
        this.body.classList.remove('theme-green', 'theme-red', 'theme-orange', 'theme-purple', 'theme-cyan', 'theme-grey',  'theme-custom'); // remove all classes
        var btnActivateThemeColor =  document.getElementById("activate-"+color);
        document.querySelector('.btn-activate-color.active').classList.remove('active');
        if(this.availableColors.indexOf(themeName) > -1){
            this.body.classList.add(themeName);
            btnActivateThemeColor.classList.add('active');
        }
    }
};

/*
 * Replace default colors to customized colors
 */
ThemeSettings.prototype.updateCssStringColors = function (cssString) {

    if(document.body.contains(themeSettings.settingsWrapper)){
        var primaryColorVal = document.getElementById('primary-color').value,
            primaryTextColorVal = document.getElementById('primary-text-color').value,
            secondaryColorVal = document.getElementById('secondary-color').value,
            secondaryTextColorVal = document.getElementById('secondary-text-color').value,
            infoColorVal = document.getElementById('info-color').value,
            infoTextColorVal = document.getElementById('info-text-color').value,
            dangerColorVal = document.getElementById('danger-color').value,
            dangerTextColorVal = document.getElementById('danger-text-color').value,
            successColorVal = document.getElementById('success-color').value,
            successTextColorVal = document.getElementById('success-text-color').value,
            warningColorVal = document.getElementById('warning-color').value,
            warningTextColorVal = document.getElementById('warning-text-color').value,
            lightColorVal = document.getElementById('light-color').value,
            lightTextColorVal = document.getElementById('light-text-color').value,
            darkColorVal = document.getElementById('dark-color').value,
            darkTextColorVal = document.getElementById('dark-text-color').value,
            customColorVal = document.getElementById('activate-custom').value,

            colors = {
                "PRIMARYCOLORVAL":  "#" + primaryColorVal,
                "PRIMARYTEXTCOLORVAL":  "#" + primaryTextColorVal,
                "SECONDARYCOLORVAL":  "#" + secondaryColorVal,
                "SECONDARYTEXTCOLORVAL":  "#" + secondaryTextColorVal,
                "INFOCOLORVAL":  "#" + infoColorVal,
                "INFOTEXTCOLORVAL":  "#" + infoTextColorVal,
                "DANGERCOLORVAL":  "#" + dangerColorVal,
                "DANGERTEXTCOLORVAL":  "#" + dangerTextColorVal,
                "SUCCESSCOLORVAL":  "#" + successColorVal,
                "SUCCESSTEXTCOLORVAL":  "#" + successTextColorVal,
                "WARNINGCOLORVAL": "#" + warningColorVal,
                "WARNINGTEXTCOLORVAL":  "#" + warningTextColorVal,
                "LIGHTCOLORVAL": "#" + lightColorVal,
                "LIGHTTEXTCOLORVAL":  "#" + lightTextColorVal,
                "DARKCOLORVAL": "#" + darkColorVal,
                "DARKTEXTCOLORVAL":  "#" + darkTextColorVal,
                "CUSTOMCOLORVAL":  "#" + customColorVal,
                "PRIMARYDARKER": this.lightenDarkenColor( primaryColorVal, -0.3),
                "PRIMARYDARK": this.lightenDarkenColor( primaryColorVal, -0.1),
                "PRIMARYLIGHTER": this.lightenDarkenColor( primaryColorVal, 0.3),
                "PRIMARYLIGHT": this.lightenDarkenColor( primaryColorVal, 0.1),
                "SECONDARYDARKER": this.lightenDarkenColor( secondaryColorVal, -0.3),
                "SECONDARYDARK": this.lightenDarkenColor( secondaryColorVal, -0.1),
                "SECONDARYLIGHTER": this.lightenDarkenColor( secondaryColorVal, 0.3),
                "SECONDARYLIGHT": this.lightenDarkenColor( secondaryColorVal, 0.1),
                "SUCCESSDARKER": this.lightenDarkenColor( successColorVal, -0.3),
                "SUCCESSDARK": this.lightenDarkenColor( successColorVal, -0.1),
                "SUCCESSLIGHTER": this.lightenDarkenColor( successColorVal, 0.3),
                "SUCCESSLIGHT": this.lightenDarkenColor( successColorVal, 0.1),
                "WARNINGDARKER": this.lightenDarkenColor( warningColorVal, -0.3),
                "WARNINGDARK": this.lightenDarkenColor( warningColorVal, -0.1),
                "WARNINGLIGHTER": this.lightenDarkenColor( warningColorVal, 0.3),
                "WARNINGLIGHT": this.lightenDarkenColor( warningColorVal, 0.1),
                "DANGERDARKER": this.lightenDarkenColor( dangerColorVal, -0.3),
                "DANGERDARK": this.lightenDarkenColor( dangerColorVal, -0.1),
                "DANGERLIGHTER": this.lightenDarkenColor( dangerColorVal, 0.3),
                "DANGERLIGHT": this.lightenDarkenColor( dangerColorVal, 0.1),
                "INFODARKER": this.lightenDarkenColor( infoColorVal, -0.3),
                "INFODARK": this.lightenDarkenColor( infoColorVal, -0.1),
                "INFOLIGHTER": this.lightenDarkenColor( infoColorVal, 0.3),
                "INFOLIGHT": this.lightenDarkenColor( infoColorVal, 0.1),
                "LIGHTDARKER": this.lightenDarkenColor( lightColorVal, -0.3),
                "LIGHTDARK": this.lightenDarkenColor( lightColorVal, -0.1),
                "LIGHTLIGHTER": this.lightenDarkenColor( lightColorVal, 0.3),
                "LIGHTLIGHT": this.lightenDarkenColor( lightColorVal, 0.1),
                "DARKDARKER": this.lightenDarkenColor( darkColorVal, -0.3),
                "DARKDARK": this.lightenDarkenColor( darkColorVal, -0.1),
                "DARKLIGHTER": this.lightenDarkenColor( darkColorVal, 0.3),
                "DARKLIGHT": this.lightenDarkenColor( darkColorVal, 0.1),
                "CUSTOMDARKER": this.lightenDarkenColor( customColorVal, -0.3),
                "CUSTOMDARK": this.lightenDarkenColor( customColorVal, -0.1),
                "CUSTOMLIGHTER": this.lightenDarkenColor( customColorVal, 0.3),
                "CUSTOMLIGHT": this.lightenDarkenColor( customColorVal, 0.1)
            };

        if(document.body.contains(themeSettings.primaryColorValue)){
            themeSettings.primaryDarkerColorValue.innerText = this.lightenDarkenColor( primaryColorVal, -0.3);
            themeSettings.primaryDarkColorValue.innerText = this.lightenDarkenColor( primaryColorVal, -0.1);
            themeSettings.primaryColorValue.innerText = "#" + primaryColorVal;
            themeSettings.primaryLighterColorValue.innerText = this.lightenDarkenColor( primaryColorVal, 0.3);
            themeSettings.primaryLightColorValue.innerText = this.lightenDarkenColor( primaryColorVal, 0.1);
        }

        if(document.body.contains( themeSettings.primaryTextColorValue)){
            themeSettings.primaryTextColorValue.innerText = "#" + primaryColorVal;
        }

        if(document.body.contains(themeSettings.successColorValue)){
            themeSettings.successDarkerColorValue.innerText = this.lightenDarkenColor( successColorVal, -0.3);
            themeSettings.successDarkColorValue.innerText = this.lightenDarkenColor( successColorVal, -0.1);
            themeSettings.successColorValue.innerText = "#" + successColorVal;
            themeSettings.successLighterColorValue.innerText = this.lightenDarkenColor( successColorVal, 0.3);
            themeSettings.successLightColorValue.innerText = this.lightenDarkenColor( successColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.successTextColorValue)){
            themeSettings.successTextColorValue.innerText = "#" + successColorVal;
        }

        if(document.body.contains(themeSettings.secondaryColorValue)){
            themeSettings.secondaryDarkerColorValue.innerText = this.lightenDarkenColor( secondaryColorVal, -0.3);
            themeSettings.secondaryDarkColorValue.innerText = this.lightenDarkenColor( secondaryColorVal, -0.1);
            themeSettings.secondaryColorValue.innerText = "#" + secondaryColorVal;
            themeSettings.secondaryLighterColorValue.innerText = this.lightenDarkenColor( secondaryColorVal, 0.3);
            themeSettings.secondaryLightColorValue.innerText = this.lightenDarkenColor( secondaryColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.secondaryTextColorValue)){
            themeSettings.secondaryTextColorValue.innerText = "#" + secondaryColorVal;
        }

        if(document.body.contains(themeSettings.infoColorValue)){
            themeSettings.infoDarkerColorValue.innerText = this.lightenDarkenColor( infoColorVal, -0.3);
            themeSettings.infoDarkColorValue.innerText = this.lightenDarkenColor( infoColorVal, -0.1);
            themeSettings.infoColorValue.innerText = "#" + infoColorVal;
            themeSettings.infoLighterColorValue.innerText = this.lightenDarkenColor( infoColorVal, 0.3);
            themeSettings.infoLightColorValue.innerText = this.lightenDarkenColor( infoColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.infoTextColorValue)){
            themeSettings.infoTextColorValue.innerText = "#" + infoColorVal;
        }
        if(document.body.contains(themeSettings.warningColorValue)){
            themeSettings.warningDarkerColorValue.innerText = this.lightenDarkenColor( warningColorVal, -0.3);
            themeSettings.warningDarkColorValue.innerText = this.lightenDarkenColor( warningColorVal, -0.1);
            themeSettings.warningColorValue.innerText = "#" + warningColorVal;
            themeSettings.warningLighterColorValue.innerText = this.lightenDarkenColor( warningColorVal, 0.3);
            themeSettings.warningLightColorValue.innerText = this.lightenDarkenColor( warningColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.warningTextColorValue)){
            themeSettings.warningTextColorValue.innerText = "#" + warningColorVal;
        }
        if(document.body.contains(themeSettings.dangerColorValue)){
            themeSettings.dangerDarkerColorValue.innerText = this.lightenDarkenColor( dangerColorVal, -0.3);
            themeSettings.dangerDarkColorValue.innerText = this.lightenDarkenColor( dangerColorVal, -0.1);
            themeSettings.dangerColorValue.innerText = "#" + dangerColorVal;
            themeSettings.dangerLighterColorValue.innerText = this.lightenDarkenColor( dangerColorVal, 0.3);
            themeSettings.dangerLightColorValue.innerText = this.lightenDarkenColor( dangerColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.dangerTextColorValue)){
            themeSettings.dangerTextColorValue.innerText = "#" + dangerColorVal;
        }
        if(document.body.contains(themeSettings.lightColorValue)){
            themeSettings.lightDarkerColorValue.innerText = this.lightenDarkenColor( lightColorVal, -0.3);
            themeSettings.lightDarkColorValue.innerText = this.lightenDarkenColor( lightColorVal, -0.1);
            themeSettings.lightColorValue.innerText = "#" + lightColorVal;
            themeSettings.lightLighterColorValue.innerText = this.lightenDarkenColor( lightColorVal, 0.3);
            themeSettings.lightLightColorValue.innerText = this.lightenDarkenColor( lightColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.lightTextColorValue)){
            themeSettings.lightTextColorValue.innerText = "#" + lightColorVal;
        }
        if(document.body.contains(themeSettings.darkColorValue)){
            themeSettings.darkDarkerColorValue.innerText = this.lightenDarkenColor( darkColorVal, -0.3);
            themeSettings.darkDarkColorValue.innerText = this.lightenDarkenColor( darkColorVal, -0.1);
            themeSettings.darkColorValue.innerText = "#" + darkColorVal;
            themeSettings.darkLighterColorValue.innerText = this.lightenDarkenColor( darkColorVal, 0.3);
            themeSettings.darkLightColorValue.innerText = this.lightenDarkenColor( darkColorVal, 0.1);
        }
        if(document.body.contains( themeSettings.darkTextColorValue)){
            themeSettings.darkTextColorValue.innerText = "#" + darkColorVal;
        }
        for (var key in colors) {
            cssString = cssString.replace(new RegExp( key, "g" ), colors[key]);
        }
        return cssString;
    }
};

/*
 * Preview of customized colors
 */
ThemeSettings.prototype.prevSettings = function () {
    if(document.body.contains(themeSettings.colorsSettings)){
        var style = document.createElement('style'),
            styleSheets = document.styleSheets,
            css = themeSettings.updateCssStringColors(themeSettings.colorsSettings.text);
        style.type = 'text/css';
        style.setAttribute('data-role','customized-colors');

        if (style.styleSheet){
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }

        if( themeSettings.head.contains(themeSettings.cssLink) ){
            themeSettings.cssLink.parentNode.removeChild(themeSettings.cssLink);
        }

        themeSettings.head.appendChild(style);

        var colors = {
            "primary-range-input":  "#" + document.getElementById('primary-color').value,
            "success-range-input":  "#" + document.getElementById('success-color').value,
            "info-range-input":   "#" + document.getElementById('info-color').value,
            "danger-range-input":   "#" + document.getElementById('danger-color').value,
            "warning-range-input":   "#" + document.getElementById('warning-color').value,
            "secondary-range-input":   "#" + document.getElementById('secondary-color').value,
            "light-range-input":   "#" + document.getElementById('light-color').value,
            "dark-range-input":   "#" + document.getElementById('dark-color').value
        };

        var onInput = function(e) {
            var classNAME = e.target.className,
                val = (e.target.value - e.target.getAttribute('min')) / (e.target.getAttribute('max') - e.target.getAttribute('min')),
                label =  e.target.parentNode.querySelector('label[data-label="'+classNAME+'-label"]'),
                parentContainer = musa.getClosest(e.target, '.slider');
            css = slider.sliderColor.call( e.target, val, colors[classNAME], parentContainer, label);

            if (style.styleSheet) {
                style.styleSheet.cssText += css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
        };

        var onChange = function(e) {
            var classNAME = e.target.className,
                color =  colors[classNAME],
                val = (e.target.value - e.target.getAttribute('min')) / (e.target.getAttribute('max') - e.target.getAttribute('min')),
                label =  e.target.parentNode.querySelector('label[data-label="'+classNAME+'-label"]'),
                parentContainer = musa.getClosest(e.target, '.slider');

            label.innerHTML = e.target.value;

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
        };

        themeSettings.head.appendChild(style);
        for (var i = 0; i < themeSettings.rangeInputs.length; i++){
            // Internet Explorer 6-11
            var isIE = /*@cc_on!@*/false || !!document.documentMode;
            if(!isIE){
                themeSettings.rangeInputs[i].addEventListener('input', onInput, false);
                var eventInput = new Event('input');
                themeSettings.rangeInputs[i].dispatchEvent(eventInput);
            }
            else {
                themeSettings.rangeInputs[i].addEventListener('change', onChange, false);
                var event = document.createEvent("HTMLEvents");
                event.initEvent("change",true,false);
                themeSettings.rangeInputs[i].dispatchEvent(event);
            }
        }

    }
};

/*
 * Check saved settings in local storage
 */
ThemeSettings.prototype.checkLocalStorage = function () {
    if(document.body.contains(themeSettings.settingsWrapper)){
        if(localStorage.getItem('css') != null){
            var style = document.createElement('style'),
                styleSheets = document.styleSheets,
                savedCss = localStorage.getItem('css'); // Get the string from local storage
            style.type = 'text/css';

            if (style.styleSheet){
                style.styleSheet.cssText = savedCss;
            } else {
                style.appendChild(document.createTextNode(savedCss));
            }
            if( themeSettings.head.contains(themeSettings.cssLink) ){
                themeSettings.cssLink.parentNode.removeChild(themeSettings.cssLink);
            }
            themeSettings.head.appendChild(style);
        }

        if(localStorage.getItem('bodyClasslist') != null){
            themeSettings.body.classList = localStorage.getItem('bodyClasslist');
            themeSettings.body.classList.remove('modal-open');
        }

        if(localStorage.getItem('customizedColors') != null){

            var getSavedColorsValues = JSON.parse(localStorage.getItem('customizedColors')),
                colorsValues = {
                    'activate-custom': getSavedColorsValues[0],
                    'primary-color': getSavedColorsValues[1],
                    'primary-text-color': getSavedColorsValues[2],
                    'secondary-color': getSavedColorsValues[3],
                    'secondary-text-color': getSavedColorsValues[4],
                    'success-color': getSavedColorsValues[5],
                    'success-text-color': getSavedColorsValues[6],
                    'info-color': getSavedColorsValues[7],
                    'info-text-color': getSavedColorsValues[8],
                    'warning-color': getSavedColorsValues[9],
                    'warning-text-color': getSavedColorsValues[10],
                    'danger-color': getSavedColorsValues[11],
                    'danger-text-color': getSavedColorsValues[12],
                    'light-color': getSavedColorsValues[13],
                    'light-text-color': getSavedColorsValues[14],
                    'dark-color': getSavedColorsValues[15],
                    'dark-text-color': getSavedColorsValues[16]
                };

            for (var key in colorsValues) {
                document.getElementById(key).value = colorsValues[key];
            }
            themeSettings.updatePrevBackgroundColor('primary', getSavedColorsValues[1]);
            themeSettings.updatePrevTextColor('primary', getSavedColorsValues[2]);
            themeSettings.updatePrevBackgroundColor('secondary', getSavedColorsValues[3]);
            themeSettings.updatePrevTextColor('secondary', getSavedColorsValues[4]);
            themeSettings.updatePrevBackgroundColor('success', getSavedColorsValues[5]);
            themeSettings.updatePrevTextColor('success', getSavedColorsValues[6]);
            themeSettings.updatePrevBackgroundColor('info', getSavedColorsValues[7]);
            themeSettings.updatePrevTextColor('info', getSavedColorsValues[8]);
            themeSettings.updatePrevBackgroundColor('warning', getSavedColorsValues[9]);
            themeSettings.updatePrevTextColor('warning', getSavedColorsValues[10]);
            themeSettings.updatePrevBackgroundColor('danger', getSavedColorsValues[11]);
            themeSettings.updatePrevTextColor('danger', getSavedColorsValues[12]);
            themeSettings.updatePrevBackgroundColor('light', getSavedColorsValues[13]);
            themeSettings.updatePrevTextColor('light', getSavedColorsValues[14]);
            themeSettings.updatePrevBackgroundColor('dark', getSavedColorsValues[15]);
            themeSettings.updatePrevTextColor('dark', getSavedColorsValues[16]);

            var colors = {
                "primary-range-input":  "#" + getSavedColorsValues[1],
                "success-range-input":  "#" + getSavedColorsValues[5],
                "info-range-input":   "#" + getSavedColorsValues[7],
                "danger-range-input":   "#" + getSavedColorsValues[11],
                "warning-range-input":   "#" + getSavedColorsValues[9],
                "secondary-range-input":   "#" + getSavedColorsValues[3],
                "light-range-input":   "#" + getSavedColorsValues[13],
                "dark-range-input":   "#" + getSavedColorsValues[15]
            };

            var onInput = function() {
                var classNAME = this.className,
                    val = (this.value - this.getAttribute('min')) / (this.getAttribute('max') - this.getAttribute('min')),
                    label =  this.parentNode.querySelector('label[data-label="'+classNAME+'-label"]'),
                    parentContainer = musa.getClosest(this, '.slider'),
                    css = slider.sliderColor.call( this, val, colors[classNAME], parentContainer, label);

                if (style.styleSheet) {
                    style.styleSheet.cssText += css;
                } else {
                    style.appendChild(document.createTextNode(css));
                }
            };

            var onChange = function() {
                var classNAME = this.className,
                    color =  colors[classNAME],
                    val = (this.value - this.getAttribute('min')) / (this.getAttribute('max') - this.getAttribute('min')),
                    label =  this.parentNode.querySelector('label[data-label="'+classNAME+'-label"]'),
                    parentContainer = musa.getClosest(this, '.slider');

                label.innerHTML = this.value;
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
            };

            themeSettings.head.appendChild(style);
            for (var i = 0; i < themeSettings.rangeInputs.length; i++){
                // Internet Explorer 6-11
                var isIE = /*@cc_on!@*/false || !!document.documentMode;
                if(!isIE){
                    themeSettings.rangeInputs[i].addEventListener('input', onInput, false);
                    var eventInput = new Event('input');
                    themeSettings.rangeInputs[i].dispatchEvent(eventInput);
                }
                else {
                    themeSettings.rangeInputs[i].addEventListener('change', onChange, false);
                    var event = document.createEvent("HTMLEvents");
                    event.initEvent("change",true,false);
                    themeSettings.rangeInputs[i].dispatchEvent(event);
                }
            }

            if(document.body.contains(themeSettings.primaryColorValue)){
                themeSettings.primaryDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[0], -0.3);
                themeSettings.primaryDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[0], -0.1);
                themeSettings.primaryColorValue.innerText = "#" + getSavedColorsValues[0];
                themeSettings.primaryLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[0], 0.3);
                themeSettings.primaryLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[0], 0.1);
            }
            if(document.body.contains( themeSettings.primaryTextColorValue)){
                themeSettings.primaryTextColorValue.innerText = "#" + getSavedColorsValues[0];
            }
            if(document.body.contains(themeSettings.successColorValue)){
                themeSettings.successDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[4], -0.3);
                themeSettings.successDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[4], -0.1);
                themeSettings.successColorValue.innerText = "#" + getSavedColorsValues[4];
                themeSettings.successLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[4], 0.3);
                themeSettings.successLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[4], 0.1);
            }
            if(document.body.contains( themeSettings.successTextColorValue)){
                themeSettings.successTextColorValue.innerText = "#" + getSavedColorsValues[4];
            }

            if(document.body.contains(themeSettings.secondaryColorValue)){
                themeSettings.secondaryDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[2], -0.3);
                themeSettings.secondaryDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[2], -0.1);
                themeSettings.secondaryColorValue.innerText = "#" + getSavedColorsValues[2];
                themeSettings.secondaryLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[2], 0.3);
                themeSettings.secondaryLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[2], 0.1);
            }
            if(document.body.contains( themeSettings.secondaryTextColorValue)){
                themeSettings.secondaryTextColorValue.innerText = "#" + getSavedColorsValues[2];
            }

            if(document.body.contains(themeSettings.infoColorValue)){
                themeSettings.infoDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[6], -0.3);
                themeSettings.infoDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[6], -0.1);
                themeSettings.infoColorValue.innerText = "#" + getSavedColorsValues[6];
                themeSettings.infoLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[6], 0.3);
                themeSettings.infoLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[6], 0.1);
            }
            if(document.body.contains( themeSettings.infoTextColorValue)){
                themeSettings.infoTextColorValue.innerText = "#" + getSavedColorsValues[6];
            }

            if(document.body.contains(themeSettings.warningColorValue)){
                themeSettings.warningDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[8], -0.3);
                themeSettings.warningDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[8], -0.1);
                themeSettings.warningColorValue.innerText = "#" + getSavedColorsValues[8];
                themeSettings.warningLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[8], 0.3);
                themeSettings.warningLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[8], 0.1);
            }
            if(document.body.contains( themeSettings.warningTextColorValue)){
                themeSettings.warningTextColorValue.innerText = "#" + getSavedColorsValues[8];
            }
            if(document.body.contains(themeSettings.dangerColorValue)){
                themeSettings.dangerDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[10], -0.3);
                themeSettings.dangerDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[10], -0.1);
                themeSettings.dangerColorValue.innerText = "#" + getSavedColorsValues[10];
                themeSettings.dangerLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[10], 0.3);
                themeSettings.dangerLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[10], 0.1);
            }
            if(document.body.contains( themeSettings.dangerTextColorValue)){
                themeSettings.dangerTextColorValue.innerText = "#" + getSavedColorsValues[10];
            }

            if(document.body.contains(themeSettings.lightColorValue)){
                themeSettings.lightDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[12], -0.3);
                themeSettings.lightDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[12], -0.1);
                themeSettings.lightColorValue.innerText = "#" + getSavedColorsValues[12];
                themeSettings.lightLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[12], 0.3);
                themeSettings.lightLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[12], 0.1);
            }
            if(document.body.contains( themeSettings.lightTextColorValue)){
                themeSettings.lightTextColorValue.innerText = "#" + getSavedColorsValues[12];
            }
            if(document.body.contains(themeSettings.darkColorValue)){
                themeSettings.darkDarkerColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[14], -0.3);
                themeSettings.darkDarkColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[14], -0.1);
                themeSettings.darkColorValue.innerText = "#" + getSavedColorsValues[14];
                themeSettings.darkLighterColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[14], 0.3);
                themeSettings.darkLightColorValue.innerText = this.lightenDarkenColor( getSavedColorsValues[14], 0.1);
            }
            if(document.body.contains( themeSettings.darkTextColorValue)){
                themeSettings.darkTextColorValue.innerText = "#" + getSavedColorsValues[14];
            }
        }
        if(localStorage.getItem('activeThemeColor') != null){
            var getActiveColor = JSON.parse(localStorage.getItem('activeThemeColor'));
            document.querySelector('.btn-activate-color.active').classList.remove('active');
            document.getElementById(getActiveColor).classList.add('active');
        }
        if(localStorage.getItem('headerColor') != null){
            var getHeaderColor = JSON.parse(localStorage.getItem('headerColor'));
            document.querySelector('.btn-activate-header.active').classList.remove('active');
            document.getElementById(getHeaderColor).classList.add('active');
        }

        if(localStorage.getItem('sidebarColor') != null){
            var getSidebarColor = JSON.parse(localStorage.getItem('sidebarColor'));
            document.querySelector('.btn-activate-sidebar.active').classList.remove('active');
            document.getElementById(getSidebarColor).classList.add('active');
        }
        if(localStorage.getItem('rightSidebar') != null){
            themeSettings.btnActivateRtlContent.classList.remove('active');
            themeSettings.btnActivateLeftSidebar.classList.remove('active');
            document.getElementById('activate-right-sidebar').classList.add('active');
        }
        if(localStorage.getItem('leftSidebar') != null){
            themeSettings.btnActivateRtlContent.classList.remove('active');
            themeSettings.btnActivateRightSidebar.classList.remove('active');
            document.getElementById('activate-left-sidebar').classList.add('active');
        }
        if(localStorage.getItem('fixedHeader') != null){
            document.getElementById('activate-fixed-header').classList.add('active');
        }
        if(localStorage.getItem('rtlContent') != null){
            themeSettings.btnActivateRightSidebar.classList.remove('active');
            themeSettings.btnActivateLeftSidebar.classList.remove('active');
            document.getElementById('activate-rtl-content').classList.add('active');
        }
    }
};

/*
 * Save settings
 */
ThemeSettings.prototype.saveSettings = function () {
    if(document.body.contains(themeSettings.colorsSettings)){
        var cusomizedColors = [];
        for(var i=0; i < themeSettings.cusomizedColorsValues.length; i++){
            cusomizedColors.push(themeSettings.cusomizedColorsValues[i].value);
        }
        // Put the string into storage
        localStorage.setItem('customizedColors', JSON.stringify(cusomizedColors));
        localStorage.setItem('css', themeSettings.updateCssStringColors(themeSettings.colorsSettings.text));
        localStorage.setItem('bodyClasslist', themeSettings.body.classList);
        document.location.reload(true);

        themeSettings.setLayoutColorSettingsIntoStorage('btn-activate-color', 'activeThemeColor');
        if(themeSettings.btnActivateDarkHeader.classList.contains('active')){
            themeSettings.setLayoutColorSettingsIntoStorage('btn-activate-header', 'headerColor');
        }
        if(themeSettings.btnActivateLightHeader.classList.contains('active')){
            themeSettings.setLayoutColorSettingsIntoStorage('btn-activate-header', 'headerColor');
        }
        if(themeSettings.btnActivateRightSidebar.classList.contains('active')){
            localStorage.setItem('rightSidebar', JSON.stringify('rightSidebar'));
        }
        if(themeSettings.btnActivateLeftSidebar.classList.contains('active')){
            localStorage.setItem('leftSidebar', JSON.stringify('leftSidebar'));
        }
        if(themeSettings.btnActivateFixedHeader.classList.contains('active')){
            localStorage.setItem('fixedHeader', JSON.stringify('fixedHeader'));
        }
        if(themeSettings.btnActivateRtlContent.classList.contains('active')){
            localStorage.setItem('rtlContent', JSON.stringify('rtlContent'));
        }
    }
};

/*
 * Cancel settings
 */
ThemeSettings.prototype.cancelSettings = function () {

    var href = "/css/color-settings.css",
        cssDefaultColorsLink = document.createElement('link');
    cssDefaultColorsLink.setAttribute("href", href);
    cssDefaultColorsLink.setAttribute("rel","stylesheet");
    cssDefaultColorsLink.type = 'text/css';
    cssDefaultColorsLink.setAttribute("media","screen");
    cssDefaultColorsLink.setAttribute("data-role","color-settings");

    var customizedStyle = themeSettings.body.querySelector('style[data-role="customized-colors"]');
    if( customizedStyle != null){
        themeSettings.body.removeChild(customizedStyle);
    }
    // Remove setted items from the storage
    localStorage.removeItem('css');
    localStorage.removeItem('customizedColors');
    localStorage.removeItem('bodyClasslist');
    localStorage.removeItem('activeThemeColor');
    localStorage.removeItem('headerColor');
    localStorage.removeItem('sidebarColor');
    localStorage.removeItem('rightSidebar');
    localStorage.removeItem('leftSidebar');
    localStorage.removeItem('fixedHeader');
    localStorage.removeItem('rtlContent');

    //Set body classlist for desktop
    if(window.innerWidth >= 768){
        themeSettings.body.classList = 'nav-md theme-green';
    }
    //Set body classlist for mobile
    else if(window.innerWidth < 768){
        themeSettings.body.classList = 'nav-sm theme-green';
    }
    document.location.reload(true);
};


/*
 * Set Layout Color Settings Into Storage
*/
ThemeSettings.prototype.setLayoutColorSettingsIntoStorage = function (classname, itemname) {
    var id =  document.querySelector('.' + classname + '.active').getAttribute('id');
    localStorage.setItem(itemname, JSON.stringify(id));
};

/*
 * Get darken and lighten colors
 */
ThemeSettings.prototype.lightenDarkenColor = function(hex, lum) {

    // validate hex string
    hex = String(hex).replace(/[^0-9a-f]/gi, '');
    if (hex.length < 6) {
        hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
    }
    lum = lum || 0;

    // convert to decimal and change luminosity
    var rgb = "#", c, i;
    for (i = 0; i < 3; i++) {
        c = parseInt(hex.substr(i*2,2), 16);
        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
        rgb += ("00"+c).substr(c.length);
    }

    return rgb;

};

var themeSettings = new ThemeSettings();
themeSettings.init();