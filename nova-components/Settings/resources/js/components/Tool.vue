<template>
<div class="codestar-container-section">
    
        
        
        <div class="codestar-header-section">
            <div class="header-left"><h2>Blueknot Settings<span>by Makehub</span></h2></div>
            <div class="header-right">
                <ul>
                    <li id="toggle"><a class="icon" href="#"><i class="fa fa-outdent"></i></a></li>
                    <li><input type="submit" class="saving button" value="Save Settings">
                    </li><li><input type="submit" name="" class="reset button" value="Reset Section" disabled="disabled">
                    </li><li><input type="submit" name="" class="reset-all button" value="Reset All" disabled="disabled">
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <div class="side-bar-section">
            <ul id="navber">
                <li class=""><a class="nav-link active" href="#general"><i class="fa fa-rocket"></i>General Settings</a></li>
                <li class=""><a class="nav-link" href="#header"><i class="fa fa-rocket"></i>Homepage Settings</a></li>
                <li class=""><a class="nav-link" href="#footerset"><i class="fa fa-rocket"></i>Footer Settings</a></li>
                
                <li class=""><a class="nav-link" href="#social"><i class="fa fa-rocket"></i>Social Settings</a></li>
                <li class=""><a class="nav-link" href="#contact"><i class="fa fa-rocket"></i>Contact Settings</a></li>
                
                <li class=""><a class="nav-link" href="#customstyling"><i class="fa fa-rocket"></i>Custom Styling</a></li>

                <li id="collapse"><a class="nav-link anguler-right tablinks" href=""><i class="fa fa-plus-circle"></i>Basic Fields
                        
                    </a></li>
                    <div id="tab1" class="tabcontent">
                            <ul>
                                <li>
                                    <a class="nav-link section-active active " href="#"><i class="fa fa-square-o"></i> Text</a>
                                </li>
                                <li>
                                    <a class="nav-link section-active " href="#"><i class="fa fa-square-o"></i> Textarea</a>
                                </li>
                                <li>
                                    <a class="nav-link section-active " href="#"><i class="fa fa-list"></i> Select</a>
                                </li>
                                <li>
                                    <a class="nav-link section-active " href="#"><i class="fa fa-check-square"></i> Checkbox</a>
                                </li>
                                <li>
                                    <a class="nav-link section-active " href="#"><i class="fa fa-dot-circle-o"></i> Radio</a>
                                </li>
                                
                                
                            </ul>
                    </div>
            </ul>
        </div>
        <div class="codestar-content">
            <div id="general" class="sec">
                
                <div class="field-text">
                    <h3>General settings</h3>
                </div>
                
                
            </div>
            <div id="header" class="sec">
                <div class="field-text">
                    <h3>Homepage settings</h3>
                </div>
                    
                <slider></slider>
                
            </div>
            <div id="footerset" class="sec">
                <div class="field-text">
                    <h3>Footer settings</h3>
                </div>
               
                
                
            </div>
            <div id="social" class="sec">
                <div class="field-text">
                    <h3>Social settings</h3>
                </div>
               
            </div>
            <div id="contact" class="sec">
                <div class="field-text">
                    <h3>Contact settings</h3>
                </div>
                
                
            </div>
            <div id="customstyling" class="sec">
                <div class="field-text">
                    <h3>Custom Styling</h3>
                </div>
                
                
            </div>
            
            
        </div>
    </div>








</div>
</template>
<script>



import $ from 'jquery'

import swal from 'sweetalert';

import slider from './Slider.vue';



export default {

components:{
    slider
},


data() {
    return {
       

    }
},

mounted() {

    //collapsible menu
    $("#collapse").click(function(){
            $("#tab1").slideUp();
            if ($(this).next().is(":hidden")){
                $("#tab1").slideDown();
            }
        });

    //footer sticky section
    //$("#footer").hide();
    $(window).scroll(function () {

    var lastScrollTop = 0;
   
    var scroll = $(window).scrollTop();

    
    if (scroll >= 200) {
    $(".codestar-header-section").addClass('sticky');
    //$(".codestar-header-section").slideDown(2500);
    }else{
    $(".codestar-header-section").removeClass('sticky');
    //$(".codestar-header-section").slideUp(2500);
    }
    });
    //hide and show sections
    $(".sec").hide();
    $(".nav-link").click(function(evt){
        evt.preventDefault();
        $(this).css('scroll-behavior','smooth');
        $(".sec").hide();
        var href = $(this).attr('href');
        $(href).show();
    });
    $("#general").show();
    //add active class
    $("#navber li a").on('click', function(){
    $(".active").removeClass('active');
    $(this).addClass('active');
    });
    //toggle
    $('#toggle').click(function(){
    $('.side-bar-section').toggle();
    $('.codestar-content').addClass("full");

    });

},

created(){
    
},
computed:{

},
methods:{



    




    
    
}
}
</script>
