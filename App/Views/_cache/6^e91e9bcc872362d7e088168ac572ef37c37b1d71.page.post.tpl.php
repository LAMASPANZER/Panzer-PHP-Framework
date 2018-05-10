<?php
/* Smarty version 3.1.32, created on 2018-05-10 03:59:22
  from '/home/lamaspanzer/srv_apache/dev2.panzer.lan/App/Views/page.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af3a77a028878_85077233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '448256a5cc5f1e72c10c2d3873c919dcf2a38193' => 
    array (
      0 => '/home/lamaspanzer/srv_apache/dev2.panzer.lan/App/Views/page.post.tpl',
      1 => 1525887670,
      2 => 'file',
    ),
    'a86ad8f419e6a7b2cc193cbdcab055c8192992d1' => 
    array (
      0 => '/home/lamaspanzer/srv_apache/dev2.panzer.lan/App/Views/layout.tpl',
      1 => 1525889643,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 86400,
),true)) {
function content_5af3a77a028878_85077233 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> <html lang="fr" xmlns:og="http://ogp.me/ns#"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no"> <title>Environement de développement web sous Linux</title> <meta name="description" content="Eu de sein me ange chez bras puis vies. He houle sacre te tu je mange. Vie dut sais doit rire fort gens soir ifs. Ici les famille cavites tassent ame sur. Rebord"> <meta name="author" content="Guillaume GUERIN"> <meta property="og:site_name" content="FromScratch"> <meta property="og:title" content="Environement de développement web sous Linux"> <meta property="og:url" content="http://dev2.panzer.lan/environement-web-linux"> <meta property="og:description" content="Eu de sein me ange chez bras puis vies. He houle sacre te tu je mange. Vie dut sais doit rire fort gens soir ifs. Ici les famille cavites tassent ame sur. Rebord"> <meta property="og:image" content="http://data.dev.panzer.lan/images/lamp.jpg"> <link rel="icon" href="/favicon.ico"> <link rel="apple-touch-icon" href="/favicon.ico"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"> <link href="/css/style.css" rel="stylesheet"> <link href="/vendor/highlightjs/css/obsidian.css" rel="stylesheet"> <link href="/vendor/section-scroll/css/section-scroll.css" rel="stylesheet"> <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]--> </head> <body> <div class="header-post" data-stellar-background-ratio="2" style="background-image: url('https://i.ytimg.com/vi/sL7Lug_K42Y/maxresdefault.jpg');"> <div class="container"> <div class="header-content"> <h1>Environement de développement web sous Linux</h1> <h4><span class="hidden-xs">Mis en ligne le </span><span class="visible-xs-inline"><i class="fa fa-calendar" aria-hidden="true"></i></span> 20 Août 2014 </span></span> par</span><span class="visible-xs-inline"></span> Guillaume GUERIN <a href="#disqus_thread" data-disqus-identifier="environement-web-linux"></a></h4> </div> </div> </div> <div class="container"> <div class="space20"></div> <div class="row"> <div class=" col-md-12"> <div class="post-content"> <pre><code class="lang-php">&lt;?php
namespace Panzer\App;

use Panzer\Controller;

class Home extends Controller
{
    public function IndexAction()
    {
        $this-&gt;view-&gt;Set('home');
        if (!$this-&gt;view-&gt;IsCached()) {
            $this-&gt;LoadModel();
            $this-&gt;view-&gt;Assign(['categories'=&gt;$this-&gt;model-&gt;GetCategories(),
                        'posts'=&gt;$this-&gt;model-&gt;GetPosts(),
                        'staffs'=&gt;$this-&gt;model-&gt;GetStaffs()]);
        }
        $this-&gt;view-&gt;Render();
    }
}</code></pre> </div> <hr class="visible-sm visible-xs"> </div> </div> <div class="row"> <div class="col-md-3"> <div class="sidebar-widget"> <h3>Voir aussi</h3> <ul class="list-unstyled"> <li><a href="/configuration-isc-dhcp-debian">Installer et configurer isc-dhcp sous debian</a></li> <li><a href="/serveur-source-debian">Installation d'un serveur de jeu source sous Debian</a></li> <li><a href="/remplacer-la-livebox-par-un-routeur-ou-une-debian">Remplacer la livebox par un routeur/debian</a></li> <li><a href="/site-virtuel-avec-apache">Configuration de site virtuel avec apache2</a></li> <li><a href="/mail-pop-imap-postfix-dovecot">Serveur de messagerie avec Postfix et Dovecot sous Debian 8</a></li> <li><a href="/outils-de-supervision">Quelques outils de monitoring indispensable à l'administration de votre debian</a></li> </ul> </div> <div class="sidebar-widget"> <div style="width: 100%; height: 250px; background-color: ghostwhite;"></div> </div> <div class="sidebar-widget"> <div class="licensed"> <a data-toggle="tooltip" data-placement="left" title="Le contenu de cette page est sous la license Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License" rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr"> <img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /><br /> </a> </div> </div> </div> </div> </div> <div class="space50"></div> <div class="container"> <div class="row"> <div class="col-sm-12"> <div id="disqus_thread"></div> <script>
					var disqus_config = function () {
					  this.page.identifier = "environement-web-linux";
					};
					(function() {
					  var d = document, s = d.createElement('script');
					  s.src = 'https://panzer.disqus.com/embed.js';
					  s.setAttribute('data-timestamp', +new Date());
					  (d.head || d.body).appendChild(s);
					})();
				</script> </div> </div> </div> <div class="space10"></div> <footer class="footer" id="footer"> <div class="footer-bottom"> <a href="#" class="back-to-top hidden-xs-down show" id="back-to-top"><i class="fa fa-angle-up"></i></a> <a href="#" class="back-to-home hidden-xs-down show" id="back-to-top"><i class="fa fa-angle-up"></i></a> <div class="container"> <span>FromScratch - &copy; 2017 Panzer Framework</span> </div> </div> </footer> <script src="/vendor/jquery/dist/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> <script src="/vendor/highlightjs/js/highlight.min.js"></script> <script src="/vendor/stellar/js/jquery.stellar.min.js"></script> <script src="/vendor/section-scroll/js/jquery.section-scroll.js"></script> <script type="text/javascript">
			$(document).ready(function () {
				$.stellar({
					verticalOffset: 75,
				});
				$('pre code').each(function(i, block) {
					hljs.highlightBlock(block);
				});
				$('body').sectionScroll(); // Easy Peasy Lemon Squeezy
			})
		</script> <script id="dsq-count-scr" src="//panzer.disqus.com/count.js" async></script> <script src="/js/app.js"></script> </body> </html><?php }
}
