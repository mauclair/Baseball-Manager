<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-04 16:39:51 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-08-04 16:39:51 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/morris13/public_html/dev-sub/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/morris13/public_html/dev-sub/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/morris13/public_html/dev-sub/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 /home/morris13/public_html/dev-sub/application/classes/controller/bm.php(8): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Bm->before()
#5 /home/morris13/public_html/dev-sub/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#6 /home/morris13/public_html/dev-sub/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/morris13/public_html/dev-sub/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#9 {main}
2011-08-04 16:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/body_bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/body_bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/html_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/html_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/navigation_l.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/navigation_l.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/navigation.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/navigation.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/navigation_s.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/navigation_s.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/content_body_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/content_body_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/content_top_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/content_top_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-04 16:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/footer_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-04 16:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/footer_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/morris13/public_html/dev-sub/index.php(109): Kohana_Request->execute()
#1 {main}