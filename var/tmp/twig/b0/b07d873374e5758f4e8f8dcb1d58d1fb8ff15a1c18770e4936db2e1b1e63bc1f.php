<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* :vibrant:email.html.twig */
class __TwigTemplate_925354e2aa5f4084c929ff4ef9f50aa104e4f378dd73414147f340891306ae00 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"robots\" content=\"noindex, nofollow\">
        <title>{subject}</title>
        <style type=\"text/css\">
            body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
            table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
            img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
            table{border-collapse: collapse !important;}
            body{font-family: 'Open Sans', Verdana, Arial, sans-serif; height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; -webkit-font-smoothing: antialiased !important; font-smoothing: antialiased !important;}
            div[style*=\"margin: 16px 0;\"] { margin:0 !important; }
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
            @media only screen and (min-width: 660px) {
                .shrinker {
                    padding: 0 30px !important;
                }
                .header-split {
                    display: block;
                    width: 50%;
                    float: left;
                }
                .header-split.right p, .header-split.right td, .header-split.right {
                    text-align: right !important;
                    float: right !important;
                }
                .small-circle {
                    width: 16% !important;
                    float: left !important;
                    display: block !important;
                }
                .small-circle-text {
                    width: 75% !important;
                    padding-left: 9% !important;
                    float: left !important;
                    display: block !important;
                }
                .large-circle {
                    width: 30% !important;
                    float: left !important;
                    display: block !important;
                }
                .large-circle-text {
                    width: 63% !important;
                    padding-left: 7% !important;
                    float: left !important;
                    display: block !important;
                }
            }
            @media only screen and (max-width: 660px) {
                * {
                    text-align: center !important;
                }
                .shrinker {
                    width: 100% !important;
                    padding: 0 15px !important;
                }
                .header-split td {
                    padding: 5px 0 !important;
                    width: 100% !important;
                    text-align: center !important;
                }

                .header-split a, .header-split p {
                    text-align: center !important;
                }
                .large-circle-text {
                    margin-bottom: 15px;
                    float: left;
                    width: 100%;
                }
                .large-circle-text td {
                    float: left;
                    width: 100%;
                }
                .c1,.c2,.c3,.c4,.c5,.c6,.c7,.c8,.c10,.c11,.c12 {
                    width: 100% !important;
                    float: left !important;
                    display: block;
                    padding: 0 !important;
                    margin: 10px 0;
                }
            }
        </style>
        <!--[if !mso]><!-->
        <style type=\"text/css\">
            /* Opens sans font */
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 100
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Regular.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 101
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Regular.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 300;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 106
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Italic.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 107
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Italic.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 300;
              font-style: italic;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 113
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBold.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 114
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBold.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 700;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 119
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBoldItalic.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 120
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBoldItalic.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 700;
              font-style: italic;
            }
        </style>
        <!--<![endif]-->
    </head>
    <body style=\"margin:0; padding:0; background: #f0f0f0;\">
    <!--[if mso]>
    <style type=\"text/css\">
    body, table, td {font-family: 'Open Sans', Verdana, Arial, sans-serif; !important;}
    </style>
    <![endif]-->
    <table width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
        <tr>
            <td width=\"100%\" valign=\"top\" align=\"center\">
                <center>
                    
                    <!-- END HEADER LINKS -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td height=\"10\" style=\"font-size: 10px; line-height: 10px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; color:#b2b2b2; text-transform: uppercase; padding:0;\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a>  
                                  
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a> 
                                                
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><unsubscribe style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none\">External Link</unsubscribe></a> 

                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a>  
                                  
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a> 
                                                
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><unsubscribe style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</unsubscribe></a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"10\" style=\"font-size: 10px; line-height: 10px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>                                  
                    <!-- START HEADER LINKS -->

                    <!-- START HEADER -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->

                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" valign=\"top\" style=\"background-repeat: no-repeat; background-color: #f0f0f0; max-width:660px; padding: 0 15px;\" bgcolor=\"#f0f0f0\" valign=\"top\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%; max-width:550px; background: #ffffff;\" class=\"shrinker\">
                                                    <tr>
                                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                                    </tr>
                                                     <tr>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#ffffff; color:#212121; padding: 0 30px;\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                                <tr class=\"header-split left\">
                                                                    <td align=\"left\" valign=\"center\" style=\"text-align: left;\">
                                                                        <a href=\"#\" target=\"_blank\" style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">
                                                                            <img src=\"";
        // line 206
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/logo_black.png"), null, null, true);
        echo "\" width=\"112\" height=\"30\" style=\"margin:0; padding:0; border:none; display:inline-block; line-height: 30px;\" border=\"0\" alt=\"Logo\">
                                                                        </a> 
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"header-split right\">
                                                                    <td align=\"right\" valign=\"center\" style=\"text-align: left\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">Vol 2.11 • Oct 27, 2017</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- END HEADER -->

                    <!-- START SECTION 1 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #2c3e50; color: #ffffff\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0; text-align: center;\">
                                                            <img src=\"";
        // line 250
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_bulb.png"), null, null, true);
        echo "\" width=\"32\" height=\"40\" style=\"width: 32px; height: auto;\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h1 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:36px; line-height:36px; font-weight:700; color:#ffffff; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H1 Header
                                                                </singleline>
                                                            </h1>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                                    </tr>
                                                   <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 15px\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:24px; font-weight:400; color:#ffffff; padding:0; margin:0;\">
                                                                <singleline>
                                                                    Vol 2.11 • Oct 27, 2017 • <a href=\"#\" style=\"color: #00bf9a\">Twitter</a> / <a href=\"#\" style=\"color: #00bf9a\">Subscribe</a> / <a href=\"#\" style=\"color: #00bf9a\">Archives</a>
                                                                </singleline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"37\" style=\"font-size: 37px; line-height: 37px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\">
                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                <tr>
                                                                    <td>
                                                                        <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                            <tr>
                                                                                <td align=\"left\" style=\"-webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;mso-hide:all;\" bgcolor=\"#00bf9a\" class=\"body-text\">
                                                                                    <a href=\"#\" target=\"_blank\" style=\"font-size: 12px; font-family: 'Open Sans', Verdana, Arial, sans-serif; color: #ffffff; text-decoration: none; text-decoration: none; border-radius: 25px; padding: 16px 25px; display: inline-block; text-transform:uppercase; font-weight: bold; letter-spacing: 1px;\">
                                                                                        <singleline>Click This</singleline>
                                                                                    </a>
                                                                                </td>
                                                                                <!-- Alternate Button for Outlook 2013, 2016-->
                                                                                <!--[if mso]>
                                                                                <td align=\"center\" valign=\"top\" style=\"text-align: center;\">
                                                                                  <v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"#\" style=\"height:50px;v-text-anchor:middle;width:150px;\" arcsize=\"25px\" strokecolor=\"#00bf9a\" fillcolor=\"#00bf9a\">
                                                                                    <w:anchorlock/>
                                                                                    <center style=\"text-transform: uppercase; color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;\">Click This</center>
                                                                                  </v:roundrect>
                                                                                </td>
                                                                                <![endif]-->
                                                                                <!-- End Alternate Button -->
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 1-->

                    <!-- START SECTION 2 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #00bf9a\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#ffffff; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"37\" style=\"font-size: 37px; line-height: 37px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\">
                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                <tr>
                                                                    <td>
                                                                        <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                            <tr>
                                                                                <td align=\"left\" style=\"-webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;mso-hide:all;\" bgcolor=\"#ffffff\" class=\"body-text\">
                                                                                    <a href=\"#\" target=\"_blank\" style=\"font-size: 12px; font-family: 'Open Sans', Verdana, Arial, sans-serif; color: #00bf9a; text-decoration: none; text-decoration: none; border-radius: 25px; padding: 16px 25px; display: inline-block; text-transform:uppercase; font-weight: bold; letter-spacing: 1px;\">
                                                                                        <singleline>Click This</singleline>
                                                                                    </a>
                                                                                </td>
                                                                                <!-- Alternate Button for Outlook 2013, 2016-->
                                                                                <!--[if mso]>
                                                                                <td align=\"center\" valign=\"top\" style=\"text-align: center;\">
                                                                                  <v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"#\" style=\"height:50px;v-text-anchor:middle;width:150px;\" arcsize=\"25px\" strokecolor=\"#ffffff\" fillcolor=\"#ffffff\">
                                                                                    <w:anchorlock/>
                                                                                    <center style=\"text-transform: uppercase; color:#00bf9a;font-family:Helvetica, Arial,sans-serif;font-size:16px;\">Click This</center>
                                                                                  </v:roundrect>
                                                                                </td>
                                                                                <![endif]-->
                                                                                <!-- End Alternate Button -->
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 2 -->

                    <!-- START SECTION 3 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#ffffff; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #4e5e9e\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0; text-align: center;\">
                                                            <img src=\"";
        // line 444
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/circle_kid.png"), null, null, true);
        echo "\" width=\"100\" height=\"100\" style=\"width: 100px; height: auto;\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#ffffff; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"37\" style=\"font-size: 37px; line-height: 37px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\">
                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                <tr>
                                                                    <td>
                                                                        <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                            <tr>
                                                                                <td align=\"left\" style=\"-webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;mso-hide:all;\" bgcolor=\"#ffffff\" class=\"body-text\">
                                                                                    <a href=\"#\" target=\"_blank\" style=\"font-size: 12px; font-family: 'Open Sans', Verdana, Arial, sans-serif; color: #4e5e9e; text-decoration: none; text-decoration: none; border-radius: 25px; padding: 16px 25px; display: inline-block; text-transform:uppercase; font-weight: bold; letter-spacing: 1px;\">
                                                                                        <singleline>Click This</singleline>
                                                                                    </a>
                                                                                </td>
                                                                                <!-- Alternate Button for Outlook 2013, 2016-->
                                                                                <!--[if mso]>
                                                                                <td align=\"center\" valign=\"top\" style=\"text-align: center;\">
                                                                                  <v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"#\" style=\"height:50px;v-text-anchor:middle;width:150px;\" arcsize=\"25px\" strokecolor=\"#ffffff\" fillcolor=\"#ffffff\">
                                                                                    <w:anchorlock/>
                                                                                    <center style=\"text-transform: uppercase; color:#4e5e9e;font-family:Helvetica, Arial,sans-serif;font-size:16px;\">Click This</center>
                                                                                  </v:roundrect>
                                                                                </td>
                                                                                <![endif]-->
                                                                                <!-- End Alternate Button -->
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 3 -->

                    <!-- START SECTION 4 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#ffffff; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #00bf9a\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#ffffff; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px;\">
                                                                <tr class=\"small-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 555
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/circle_placeholder_turntable.png"), null, null, true);
        echo "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"small-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing. Elit aenean gravida mauris.
                                                                            </multiline>
                                                                        </p>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#ffffff; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px;\">
                                                                <tr class=\"small-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 583
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/circle_placeholder_look.png"), null, null, true);
        echo "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"small-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing. Elit aenean gravida mauris.
                                                                            </multiline>
                                                                        </p>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#ffffff; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px;\">
                                                                <tr class=\"small-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 611
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/circle_placeholder_neon.png"), null, null, true);
        echo "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"small-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing. Elit aenean gravida mauris.
                                                                            </multiline>
                                                                        </p>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#ffffff; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 4 -->

                    <!-- START SECTION 5 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#ffffff; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #4e5e9e\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#ffffff; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px;\">
                                                                <tr class=\"large-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 683
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_tag.png"), null, null, true);
        echo "\" width=\"140\" height=\"140\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"large-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#ffffff; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Aliquam nunc neque, fringilla eu ante a, pharetra suscipit felis. Donec quis pretium massa. 
                                                                            </multiline>
                                                                        </p>
                                                                        <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\" style=\"display: inline-block; float: none;\">
                                                                            <tr>
                                                                                <td>
                                                                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                                                                        <tr>
                                                                                            <td align=\"left\" style=\"-webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px;mso-hide:all;\" bgcolor=\"#00bf9a\" class=\"body-text\">
                                                                                                <a href=\"#\" target=\"_blank\" style=\"font-size: 12px; font-family: 'Open Sans', Verdana, Arial, sans-serif; color: #ffffff; text-decoration: none; text-decoration: none; border-radius: 25px; padding: 16px 25px; display: inline-block; text-transform:uppercase; font-weight: bold; letter-spacing: 1px;\">
                                                                                                    <singleline>Click This</singleline>
                                                                                                </a>
                                                                                            </td>
                                                                                            <!-- Alternate Button for Outlook 2013, 2016-->
                                                                                            <!--[if mso]>
                                                                                            <td align=\"center\" valign=\"top\" style=\"text-align: center;\">
                                                                                              <v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"#\" style=\"height:50px;v-text-anchor:middle;width:150px;\" arcsize=\"25px\" strokecolor=\"#00bf9a\" fillcolor=\"#00bf9a\">
                                                                                                <w:anchorlock/>
                                                                                                <center style=\"text-transform: uppercase; color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;\">Click This</center>
                                                                                              </v:roundrect>
                                                                                            </td>
                                                                                            <![endif]-->
                                                                                            <!-- End Alternate Button -->
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 5 -->

                    <!-- START COMPANY INFO -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; color:#212121; text-transform: uppercase;\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                    <a href=\"mailto:#\" target=\"_blank\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\">Contact Link</singleline></a>  
                                                    <span style=\"font-family:arial, sans-serif; font-size:10px; line-height:20px; color:#dddddd;\">&nbsp;|&nbsp;</span>                                      
                                                    <a href=\"mailto:#\" target=\"_blank\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\">Contact Link</singleline></a> 
                                                    <span style=\"font-family:arial, sans-serif; font-size:10px; line-height:20px; color:#dddddd;\">&nbsp;|&nbsp;</span>
                                                    
                                                    <a href=\"{unsubscribe_url}\" target=\"_blank\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\"><unsubscribe style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\">Unsubscribe</unsubscribe></a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END COMPANY INFO -->

                    <!-- START COPYRIGHT -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; color:#212121; text-transform: uppercase;\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <p style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:12px; line-height:18px; color:#212121; text-transform: uppercase; padding:0; margin:0;\">
                                                    <multiline><span style=\"font-size:9px;\">&copy; 2017 Mautic - All Rights Reserved.</span><br/><span style=\"font-size:9px;\">10 Cabot Road | Medford, MA | 02155</span></multiline>
                                                </p>
                                                <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END COPYRIGHT -->

                    <!-- START SOCIAL -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\" style=\"width: 100%; max-width:150px;\">
                                                    <tr>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 831
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_social.png"), null, null, true);
        echo "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 836
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_social.png"), null, null, true);
        echo "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 841
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_social.png"), null, null, true);
        echo "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"40\" style=\"font-size: 40px; line-height: 40px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SOCIAL -->
                    
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </center>
            </td>
        </tr>
    </table>              
    <div style=\"display:none; white-space:nowrap; font:15px courier; line-height:0;\">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return ":vibrant:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  930 => 841,  922 => 836,  914 => 831,  763 => 683,  688 => 611,  657 => 583,  626 => 555,  512 => 444,  315 => 250,  268 => 206,  179 => 120,  175 => 119,  167 => 114,  163 => 113,  154 => 107,  150 => 106,  142 => 101,  138 => 100,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":vibrant:email.html.twig", "/home/yerbanov/public_html/mailingms/themes/vibrant/html/email.html.twig");
    }
}
