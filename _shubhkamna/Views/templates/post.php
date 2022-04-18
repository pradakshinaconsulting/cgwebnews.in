<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?= $meta['title'] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="Krishna K Tiwari">
        <meta name="revisit-after" content="1 days">
        <meta name="description" content="<?= $meta["description"] ?>">
        <meta property="og:url"                content="<?= site_url(service('uri')) ?>" />
        <meta property="og:type"               content="<?= $meta["og_type"] ?>" />
        <meta property="og:title"              content="<?= $meta["title"] ?>" />
        <meta property="og:description"        content="<?= $meta["description"] ?>" />
        <meta property="og:image"              content="<?= $meta["og_image"] ?>" />
        <meta name="twitter:card" content="summary" />
        <meta property="og:url" content="<?= site_url(service('uri')) ?>" />
        <meta property="og:title" content="<?= $meta["title"] ?>" />
        <meta property="og:description" content="<?= $meta["description"] ?>" />
        <meta property="og:image" content="<?= $meta["og_image"] ?>" />
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="canonical" href="<?= site_url(service('uri')) ?>" />
        <script src="https://kit.fontawesome.com/bc5fb07b3b.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
        <link href="<?= site_url("public/theme/pradakshina/css/style.css") ?>" type="text/css" rel="stylesheet"/>
        <!--
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url() ?>public/image/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo site_url() ?>public/image/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url() ?>public/image/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url() ?>public/image/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url() ?>public/image/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url() ?>public/image/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url() ?>public/image/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url() ?>public/image/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url() ?>public/image/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo site_url() ?>public/image/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url() ?>public/image/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo site_url() ?>public/image/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url() ?>public/image/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo site_url() ?>public/image/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo site_url() ?>public/image/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#C60C30">
        <!--
        <script>
            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
                OneSignal.init({
                    appId: "f1883546-4fff-4689-aad2-0809ad2d8d94",
                    safari_web_id: "web.onesignal.auto.34e4584e-b851-4129-9188-f0d7c790d3df",
                    notifyButton: {
                        enable: true,
                    },
                });
                OneSignal.showNativePrompt();
            });

            function documentInitOneSignal() {
                var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

                var oneSignalLinkClickHandler = function(event) {
                    OneSignal.push(['registerForPushNotifications']);
                    event.preventDefault();
                };
                for (var i = 0; i < oneSignal_elements.length; i++)
                    oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
            }

            if (document.readyState === 'complete') {
                documentInitOneSignal();
            } else {
                window.addEventListener("load", function(event) {
                    documentInitOneSignal();
                });
            }
        </script>
        -->
        <script data-ad-client="ca-pub-2505945327780324" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
</script>
    </head>
    <body <?php echo ( isset($post['copy_protection']) && ($post['copy_protection'] == 1) )?('oncontextmenu="return false;" onselectstart="return false;"'):('') ?> style="padding-top:170px;">
        <header id="main-header" class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= site_url() ?>"><img src="<?php echo site_url("public/images/cgwebnews_logo.gif") ?>" height="100"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/india/'); ?>">देश</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/world/'); ?>">विदेश</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/chhattisgarh/'); ?>">छत्तीसगढ़</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/madhya-pradesh/'); ?>">मध्य प्रदेश</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/uttar-pradesh/'); ?>">उत्तर प्रदेश</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/bihar/'); ?>">बिहार</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/business/'); ?>">ब्यवसाय</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/sport/'); ?>">खेल</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/bollywood/'); ?>">बॉलीवुड</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('category/crime/'); ?>">क्राइम</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="news-ticker">
                <marquee>
                    <?php
                        foreach($postList as $post)
                        {
                          ?><a href="<?= site_url($post['id']."/".$post['post_slug']) ?>"><?= $post['post_title'] ?>&nbsp;/&nbsp;</a><?php
                        }

                        ?>
                </marquee>
            </section>
        </header>
        <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <section>
            <div class="container pt-4 mb-4">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "page-top")
                              {
                                ?>
                        <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                            <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                        </div>
                        <?php
                            $i++;
                            }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <section>
            <div class="container pt-4 mb-4">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "page-top-two")
                              {
                                ?>
                        <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                            <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                        </div>
                        <?php
                            $i++;
                            }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <section class="mb-4">
          <div class="container">
  <div class="row">
    <div class="col-6"><a href="https://chat.whatsapp.com/LJvgM71V0TwFE8A2xaLz4Q" class="btn btn-primary w-100">Join WhatsApp</a></div>
    <div class="col-6"><a href="https://t.me/joinchat/S9VWoekHX_VjZTQ9" class="btn btn-primary w-100">Join Telegram</a></div>

  </div>
          </div>
        </section>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        
                        <?= $content ?>
                        <div class="carousel slide pt-4 mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "content-bottom-four")
                              {
                                ?>
                        <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                            <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                        </div>
                        <?php
                            $i++;
                            }
                            }
                            ?>
                    </div>
                </div>
                    </div>
                    <div class="col-md-4">

                        <div class="mb-4">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $i = 1; ?>
                                    <?php
                                        foreach($advertisementList as $advertisement)
                                        {
                                          if($advertisement["area"] == "side-top")
                                          {
                                            ?>
                                    <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                                        <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                                    </div>
                                    <?php
                                        $i++;
                                        }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        <div class="mb-4">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $i = 1; ?>
                                    <?php
                                        foreach($advertisementList as $advertisement)
                                        {
                                          if($advertisement["area"] == "side-top-two")
                                          {
                                            ?>
                                    <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                                        <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                                    </div>
                                    <?php
                                        $i++;
                                        }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                       <div class="card mb-4">
                            <div class="card-header" style="background: #C60C30;">
                                <h5 class="text-center text-white">Category</h5>
                            </div>
                            <div class="card-body">
                                <strong>
                                <?php
                                    foreach($categoryList as $category)
                                    {
                                      ?>
                                <a href="<?= site_url("category/".$category['slug']) ?>"><?= $category['name_hindi'] ?></a>&nbsp;,&nbsp;
                                <?php
                                    }

                                    ?>
                                </strong>
                            </div>
                        </div>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        <div class="mb-4">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $i = 1; ?>
                                    <?php
                                        foreach($advertisementList as $advertisement)
                                        {
                                          if($advertisement["area"] == "side-bottom")
                                          {
                                            ?>
                                    <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                                        <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                                    </div>
                                    <?php
                                        $i++;
                                        }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        <div class="card mb-4">
                            <?php
                                foreach($rPostList as $post)
                                {
                                  ?>
                            <a href="<?= site_url($post['id']."/".$post['post_slug']) ?>">
                                <div class="card-body row">
                                    <div class="col-4"><img src="<?= $post['post_img'] ?>" width="100"/></div>
                                    <div class="col-8">
                                        <p><?php echo $post['post_title'] ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }

                                ?>
                        </div>
                        <div class="card card-blog">
                            <div class="card-image">
                                <img src="<?= site_url("public/images/anil-tamboli.jpg") ?>" class="card-img-top" alt="Anil Tamboli" loading="lazy">
                            </div>
                            <div class="content">
                                <h5 class="card-title text-center">अनिल तम्बोली</h5>
                                <p class="card-text text-center">Administrator</p>
                                <p class="card-text text-center"><strong>Contact</strong></br><a href="tel:+919340270280" target="_blank">+91 9340270280</a>&nbsp;|&nbsp;<a href="tel:+919827961864" target="_blank">+91 9827961864</a></p>
                                <p class="card-text text-center"><strong>Email :</strong> zee24ghante.janjgir@gmail.com</p>
                                <p class="card-text text-center"><strong>Add :</strong> Mahamaya Apartment , Main Road , SAKTI , 495689</p>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <div id="div_322022029225142">
<script>
var domain = (window.location != window.parent.location)? document.referrer : document.location.href;
if(domain==""){domain = (window.location != window.parent.location) ? window.parent.location: document.location.href;}
var scpt=document.createElement("script");
var GetAttribute = "afpftpPixel_"+(Math.floor((Math.random() * 500) + 1))+"_"+Date.now() ;
scpt.src="//adgebra.co.in/afpf/GetAfpftpJs?parentAttribute="+GetAttribute;
scpt.id=GetAttribute;
scpt.setAttribute("data-pubid","5767");
scpt.setAttribute("data-slotId","1");
scpt.setAttribute("data-templateId","32");
scpt.setAttribute("data-accessMode","1");
scpt.setAttribute("data-domain",domain);
scpt.setAttribute("data-divId","div_322022029225142");
document.getElementById("div_322022029225142").appendChild(scpt);
</script>
</div>

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <section>
            <div class="container pt-4 mb-4">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "page-bottom")
                              {
                                ?>
                        <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                            <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                        </div>
                        <?php
                            $i++;
                            }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <div class="mb-4">
                            <a href='https://free-hit-counters.net/'>https://free-hit-counters.net/</a>
                            <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=7e2452eec600b7ff95dba5c76bd05b671234072e'></script>
                            <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/688309/t/0"></script>
                        </div>
        <footer id="main-footer">
            <p>
                <a href="<?= site_url() ?>about">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="<?= site_url() ?>terms-policy">Terms & Policy</a>
            </p>
            <p>
                <a href="https://wa.me/+917470822468?text=I%20am%20interested%20in%20your%20service">प्रदक्षिणा - 7470822468</a>
            </p>
        </footer>
        <div style="z-index: 1000;position: fixed; bottom: 75px; right: 10px; width: 150px; height: 150px;">
          <div class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <?php $i = 1; ?>
                  <?php
                      foreach($advertisementList as $advertisement)
                      {
                        if($advertisement["area"] == "cube-rotate")
                        {
                          ?>
                  <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                      <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                  </div>
                  <?php
                      $i++;
                      }
                      }
                      ?>
              </div>
          </div>
        </div>
        <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="4192120861"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<amp-auto-ads type="adsense"
        data-ad-client="ca-pub-2505945327780324">
</amp-auto-ads>


<!-- afp footer code starts here --><script type="text/javascript">	var adgf_p1="5767";	var adgf_p2="flag~custom_params_demographic";	var adgf_p3="0";	var adgf_p4="";	var adgf_p5="";	var adgFtSc=document.createElement("script");	adgFtSc.id="adg_pixel_footer_script";	document.body.appendChild(adgFtSc);	adgFtSc.async=true;	var adgScParam="p1="+adgf_p1+"&amp;p2="+adgf_p2+"&amp;p3="+adgf_p3+"&amp;p4="+adgf_p4+"&amp;p5="+adgf_p5;	adgFtSc.src="//adgebra.co.in/afpf/afpf.js?"+adgScParam;</script><noscript>	<iframe id='adg_footer_pixel_script' src="//adgebra.co.in/afpf/afpf?p1=5767&amp;p2=0&amp;p3=1&amp;p4=&amp;p5=" width="0" height="0" frameBorder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></noscript> <!-- afp footer code ends here -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <script src="<?= site_url("public/theme/pradakshina/js/script.js") ?>"></script>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
        <script>
            $("#share").jsSocials({
                shares: ["facebook", "telegram", "whatsapp"]
            });
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174497384-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-174497384-1');
        </script>
    </body>
</html>
