<?php defined('_JEXEC') or die; 

JHtmlBootstrap::loadCss(false);

$doc = JFactory::getDocument();
$doc->addScript('/templates/blank_j3/js/jquery-2.0.3.min.js');
$doc->addStyleSheet('/templates/blank_j3/css/jcss.php');
$doc->addScript('/templates/blank_j3/js/application.js');
$doc->addScript('/templates/blank_j3/js/bootstrap.min.js');


$params = $this->params;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
	<div class="wrap">
		<div class="row" style="margin-left: 0px; margin-right: 0px;">
			<?php if ($params->get('borders')) : ?>	
					<div class="col-lg-12 bordered">
			<?php else : ?>
					<div class="col-lg-12 col-md-12 col-sm-12">
			<?php endif ?>	
						<?php if ($this->countModules('top')) : ?>
							<div class="row">
								<div class="col-md-12 top">
									<jdoc:include type="modules" name="top" style="none"/>
								</div>
							</div>
						<?php endif; ?>

						<?php if ($this->countModules('top-left or top-center or top-right')) : ?>
							<div class="row">
						<?php endif; ?>
						
						<?php if ($this->countModules('top-left')) : ?>
							<div class="<?php echo $params->get('top_left_class', 'col-md-4'); ?> top-left">
								<jdoc:include type="modules" name="top-left" style="none"/>
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('top-center')) : ?>
							<div class="<?php echo $params->get('top_center_class', 'col-md-4'); ?> top-center">
								<jdoc:include type="modules" name="top-center" style="none"/>
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('top-right')) : ?>
							<div class="<?php echo $params->get('top_right_class', 'col-md-4'); ?> top-right">
								<jdoc:include type="modules" name="top-right" style="none"/>
							</div>
						<?php endif; ?>
						
						<?php if ($this->countModules('top-left or top-center or top-right')) : ?>
							</div>
						<?php endif; ?>
	
						<?php if ($this->countModules('menu-top')) : ?>
							<div class="row">
								<div class="navbar navbar-static-top">
									<div class="navbar-inner">
										<jdoc:include type="modules" name="menu-top" style="none"/>
									</div>
								</div>
							</div>
						<?php endif; ?>
						
						<?php if ($this->countModules('slider')) : ?>
							<div class="row slider">
								<jdoc:include type="modules" name="slider" style="none"/>
							</div>
							
						<?php endif ?>
						
						<?php if ($this->countModules('menu-bottom')) : ?>
							<div class="row">
								<div class="navbar navbar-static-top">
									<div class="navbar-inner">
										<jdoc:include type="modules" name="menu-bottom" style="none"/>
									</div>
								</div>
							</div>
						<?php endif; ?>
						
						<?php if ($this->countModules('breadcrumbs')) : ?>
							<div class="row">
								<div class="breadcrumbs">
									<div class="breadcrumbs-inner">
										<jdoc:include type="modules" name="breadcrumbs" style="none"/>
									</div>
								</div>
							</div>
						<?php endif; ?>
						
						<!--  CONTENT -->
						<div class="row">
							<?php if ($this->countModules('left and right')) : ?>
								<div class="col-md-3 left">
							<?php elseif ($this->countModules('left')) : ?>
								<div class="col-md-4 left">
							<?php else : ?>
								<div class="col-md-0 left">
							<?php endif; ?>						
									<jdoc:include type="modules" name="left" style="default"/>
								</div>
							<?php if ($this->countModules('left and right')) : ?>
								<div class="col-md-6">
							<?php elseif ($this->countModules('left or right')) : ?>
								<div class="col-md-8">
							<?php else : ?>
								<div class="col-md-12">
							<?php endif; ?>
									<jdoc:include type="message" />
									<?php if ($this->countModules('content-header')) : ?>
										<div class="content-footer">
											<jdoc:include type="modules" name="content-header" style="default"/>
										</div>
									<?php endif; ?>
									<jdoc:include type="component" />
									<?php if ($this->countModules('content-footer')) : ?>
										<div class="content-footer">
											<jdoc:include type="modules" name="content-footer" style="default"/>
										</div>
									<?php endif; ?>
								</div>
							<?php if ($this->countModules('left and right')) : ?>
								<div class="col-md-3 right">
							<?php elseif ($this->countModules('right')) : ?>
								<div class="col-md-4 right">
							<?php else : ?>
								<div class="col-md-0 right">
							<?php endif; ?>	
									<jdoc:include type="modules" name="right" style="default"/>
								</div>
						</div>					
						<!-- !CONTENT -->
					
						<?php 
							$bottom_bool = false;
							for ($i=0; $i < 6; $i++)
								if($this->countModules('bottom-' . ($i+1)))
									$bottom_bool = true;
							if($bottom_bool === true) :
						?>
							<div class="row">
							<?php
								$n = $params->get('bottom-count');
								for ($i=1; $i < $n+1; $i++) { 
									echo '<div class="col-md-' . (12 / $n) . ' bottom-'.$i.'">';
									echo 	'<jdoc:include type="modules" name="bottom-' . $i . '" style="default"/>';
									echo '</div>';
								}
							?>
							</div>
						<?php endif;?>
						<?php if ($this->countModules('footer')) : ?>
							<div class="row">
								<div class="col-md-12 footer">
									<jdoc:include type="modules" name="footer" style="none"/>
								</div>
							</div>
						<?php endif; ?>				
					</div>
			</div>
		</div>
	</body>
</html>