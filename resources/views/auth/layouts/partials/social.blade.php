<style>
    #social {
        margin: 20px 10px;
        text-align: center;
    }

    .smGlobalBtn {
        /* global button class */
        display: inline-block;
        position: relative;
        cursor: pointer;
        width: 50px;
        height: 50px;
        border: 2px solid #ddd;
        /* add border to the buttons */
        box-shadow: 0 3px 3px #999;
        padding: 0px;
        text-decoration: none;
        text-align: center;
        color: #fff;
        font-size: 25px;
        font-weight: normal;
        line-height: 2em;
        border-radius: 27px;
        -moz-border-radius: 27px;
        -webkit-border-radius: 27px;
    }

    /* facebook button class*/
    .facebookBtn {
        background: #4060A5;
    }

    .facebookBtn:before {
        /* use :before to add the relevant icons */
        font-family: "FontAwesome";
        content: "\f09a";
        /* add facebook icon */
    }

    .facebookBtn:hover {
        color: #4060A5;
        background: #fff;
        border-color: #4060A5;
        /* change the border color on mouse hover */
    }

    /* twitter button class*/
    .twitterBtn {
        background: #00ABE3;
    }

    .twitterBtn:before {
        font-family: "FontAwesome";
        content: "\f099";
        /* add twitter icon */

    }

    .twitterBtn:hover {
        color: #00ABE3;
        background: #fff;
        border-color: #00ABE3;
    }

    /* google button class*/
    .googleBtn {
        background: #e64522;
    }

    .googleBtn:before {
        font-family: "FontAwesome";
        content: "\f1a0";
        /* add google icon */
    }

    .googleBtn:hover {
        color: #e64522;
        background: #fff;
        border-color: #e64522;
    }

    /* linkedin button class*/
    .linkedinBtn {
        background: #0094BC;
    }

    .linkedinBtn:before {
        font-family: "FontAwesome";
        content: "\f0e1";
        /* add linkedin icon */
    }

    .linkedinBtn:hover {
        color: #0094BC;
        background: #fff;
        border-color: #0094BC;
    }   

</style>

<div id="social">
    <a class="facebookBtn smGlobalBtn" href="#"></a>
    <a class="twitterBtn smGlobalBtn" href="#"></a>
    <a class="googleBtn smGlobalBtn" href="#"></a>
    <a class="linkedinBtn smGlobalBtn" href="#"></a>
</div>