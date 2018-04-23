
<header class="navbar navbar-default navbar-inverse navbar-fixed-top desktopScreenNavbar" role="navigation">
			<div id="headwrap">
      
				<?php if($image = $site->logo()->toFile()): ?>
						<div id="titlelogo">		
							<div id="logo">
								<img src="<?= $image->url() ?>" width="167" height="100" alt="Site logo">
							</div>	
						</div>
				<?php endif ?>
							
				<div id="mwrap">
					<div id="lt"></div>
					<div id="lm"></div>
					<div id="lb"></div>
				</div>
							
							
				<div id="nwrap">
					<nav>
						<ul class="navigation">
							<?php foreach($pages->visible() as $item): ?>
								<li id="<?= r($item->isOpen(), 'current') ?>">
									<a href="<?= $item->url() ?>" id="<?= r($item->isOpen(), ' current') ?>"><?= $item->title()->html() ?></a>
								</li>
							<?php endforeach ?>
						</ul>
					</nav>						
				</div>
			</div>
</header>