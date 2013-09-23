<?php defined('_JEXEC') or die; 

JHtml::_('bootstrap.framework');
JHtmlBootstrap::loadCss(false);

$doc = JFactory::getDocument();
$doc->addStyleSheet('/templates/blank_j3/css/jcss.php');
$doc->addScript('/templates/blank_j3/js/application.js');


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
		<div class="left-edge">
			<div class="right-edge">
				<div class="wrapper">
					<div class="container">
						<div class="row">
						<?php if ($this->countModules('logo')) : ?>
							<div class="span3 logo">
								<jdoc:include type="modules" name="logo" style="none"/>
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('header')) : ?>
							<div class="span5 header">
								<jdoc:include type="modules" name="header" style="none"/>
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('user1')) : ?>
							<div class="span4 user1">
								<jdoc:include type="modules" name="user1" style="none"/>
							</div>
						<?php endif; ?>
						</div>
						
						<?php if ($this->countModules('slider')) : ?>
						<div class="row">
							<div class="span12 slider">
								<jdoc:include type="modules" name="slider" style="none"/>
							</div>
						</div>
						<?php endif ?>
						
						<?php if ($this->countModules('mainmenu')) : ?>
						<div class="row">
							<div class="span12">
								<div class="navbar navbar-static-top">
									<div class="navbar-inner">
										<jdoc:include type="modules" name="mainmenu" style="none"/>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
						<?php if ($this->countModules('breadcrumbs')) : ?>
						<div class="breadcrumbs">
							<div class="breadcrumbs-inner">
								<jdoc:include type="modules" name="breadcrumbs" style="none"/>
							</div>
						</div>
						<?php endif; ?>
						<div class="row">
							<?php if ($this->countModules('left and right')) : ?>
								<div class="span3 left">
									<jdoc:include type="modules" name="left" style="default"/>
								</div>
								<div class="span6 ">
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
								<div class="span3 right">
									<jdoc:include type="modules" name="right" style="default"/>
								</div>
							<?php elseif ($this->countModules('left')) : ?>
								<div class="span3 left">
									<jdoc:include type="modules" name="left" style="default"/>
								</div>
								<div class="span9 ">
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
							<?php elseif ($this->countModules('right')) : ?>
								<div class="span9 ">
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
								<div class="span3 right">
									<jdoc:include type="modules" name="right" style="default"/>
								</div>
							<?php else : ?>
								<div class="span12 ">
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
							<?php endif; ?>
						</div>
						<?php if ($this->countModules('bottom1 and bottom2 and bottom3')) : ?>
						<div class="row bottom">
							<div class="span4 bottom1">
								<jdoc:include type="modules" name="bottom1" style="default"/>
							</div>
							<div class="span4 bottom2">
								<jdoc:include type="modules" name="bottom2" style="default"/>
							</div>
							<div class="span4 bottom3">
								<jdoc:include type="modules" name="bottom3" style="default"/>
							</div>
						<?php elseif($this->countModules('bottom1 and bottom2')) :?>
							<div class="span4 bottom1">
								<jdoc:include type="modules" name="bottom1" style="default"/>
							</div>
							<div class="span8 bottom2">
								<jdoc:include type="modules" name="bottom2" style="default"/>
							</div>
						<?php elseif($this->countModules('bottom2 and bottom3')) :?>
							<div class="span6 bottom2">
								<jdoc:include type="modules" name="bottom2" style="default"/>
							</div>
							<div class="span6 bottom3">
								<jdoc:include type="modules" name="bottom3" style="default"/>
							</div>
						<?php elseif($this->countModules('bottom1 and bottom3')) :?>
							<div class="span8 bottom1">
								<jdoc:include type="modules" name="bottom1" style="default"/>
							</div>
							<div class="span4 bottom3">
								<jdoc:include type="modules" name="bottom3" style="default"/>
							</div>
						</div>
						<?php endif; ?>
						<?php if ($this->countModules('footer')) : ?>
						<div class="row">
							<div class="span12 footer">
								<jdoc:include type="modules" name="footer" style="none"/>
							</div>
							<?php if ($this->countModules('copy')) : ?>
							<div class="span12 copy">
								<jdoc:include type="modules" name="copy" style="none"/>
							</div>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>