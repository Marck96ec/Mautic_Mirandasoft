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

/* :cards:email.html.twig */
class __TwigTemplate_85b63415ce36011d49cfc1eb554aaf917695a0e8b8d1e0c52f095f3c7001ba8c extends \Twig\Template
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
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
                    padding: 0 55px !important;
                }
                .c4 {
                    width: 35% !important;
                    float: left !important;
                    display: block !important;
                }
                .c8 {
                    width: 60% !important;
                    padding-left: 5% !important;
                    float: left !important;
                    display: block !important;
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
            }
            @media only screen and (max-width: 660px) {
                .shrinker {
                    width: 100% !important;
                }
                .c1,.c2,.c3,.c4,.c5,.c6,.c7,.c8,.c10,.c11,.c12 {
                    width: 100% !important;
                    float: left !important;
                    display: block;
                    padding: 0 !important;
                    margin: 10px 0;
                }
                .header-split td {
                    padding: 5px 0 !important;
                    width: 100% !important;
                    text-align: center !important;
                }

                .header-split a, .header-split p {
                    text-align: center !important;
                }
            }
        </style>
        <!--[if !mso]><!-->
        <style type=\"text/css\">
            /* Opens sans font */
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 76
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Regular.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 77
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Regular.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 300;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 82
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Italic.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 83
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-Italic.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 300;
              font-style: italic;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 89
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBold.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 90
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBold.ttf"), null, null, true);
        echo "')  format('truetype'); 
              font-weight: 700;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 95
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/open-sans/OpenSans-SemiBoldItalic.WOFF"), null, null, true);
        echo "') format('woff'),
                   url('";
        // line 96
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
                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
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
                                        <td align=\"center\" valign=\"top\" style=\"background-repeat: no-repeat; background-size: cover; background-color: #f0f0f0; max-width:660px; padding: 0 15px;\" bgcolor=\"#f0f0f0\" valign=\"top\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%; max-width:550px;\" class=\"shrinker\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr class=\"header-split left\">
                                                        <td align=\"left\" valign=\"center\" style=\"text-align: left;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">
                                                                <img src=\"";
        // line 176
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/logo_black.png"), null, null, true);
        echo "\" width=\"120\" height=\"31\" style=\"margin:0; padding:0; border:none; display:inline-block; line-height: 30px;\" border=\"0\" alt=\"Logo\">
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr class=\"header-split right\">
                                                        <td align=\"right\" valign=\"center\" style=\"text-align: left\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">Vol 2.11 ??? Oct 27, 2017</p>
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
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0; text-align: center;\">
                                                            <img src=\"";
        // line 217
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/background_face.jpg"), null, null, true);
        echo "\" width=\"550\" height=\"286\" style=\"width: 100%; height: auto;\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                        </td>
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
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #f0f0f0\">
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0; text-align: center;\">
                                                            <img src=\"";
        // line 311
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/placeholder_coffee.png"), null, null, true);
        echo "\" width=\"298\" height=\"218\" style=\"width:100%; max-width:298px; height: auto !important; margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"10\" style=\"font-size: 10px; line-height: 10px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                        </td>
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
                    <!-- END SECTION 2-->

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
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" align=\"center\" valign=\"top\" style=\"padding: 0; text-align: center;\">
                                                            <img src=\"";
        // line 402
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/background_look.jpg"), null, null, true);
        echo "\" width=\"550\" height=\"343\" style=\"width: 100%; height: auto;\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: center;\">
                                                            <h2 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                        </td>
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
                    <!-- END SECTION 3-->

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
        // line 564
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_social.png"), null, null, true);
        echo "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 569
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/icon_social.png"), null, null, true);
        echo "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 574
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
        return ":cards:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 574,  646 => 569,  638 => 564,  473 => 402,  379 => 311,  282 => 217,  238 => 176,  155 => 96,  151 => 95,  143 => 90,  139 => 89,  130 => 83,  126 => 82,  118 => 77,  114 => 76,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":cards:email.html.twig", "/home/yerbanov/public_html/mailingms/themes/cards/html/email.html.twig");
    }
}
