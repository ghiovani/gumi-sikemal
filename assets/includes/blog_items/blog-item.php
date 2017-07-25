								
								<!-- Blog Post -->
								<div class="blog-post animate-onscroll">
									
									<?php if(isset($blog_item['thumbnail']) || 
									isset($blog_item['video']) || 
									isset($blog_item['audio']) || 
									isset($blog_item['slideshow'])){?>
									<div class="post-image">
										
										<?php if(isset($blog_item['thumbnail'])) { ?>
										<img src="<?php echo $blog_item['thumbnail'];?>" alt="">
										<?php } ?>
										
										<?php if(isset($blog_item['thumbnail'])) { ?>
										<div class="media-hover">
											<div class="media-icons">
												<a href="<?php if(isset($blog_item['img'])) echo $blog_item['img'];?>" data-group="media-jackbox" class="jackbox media-icon"><i class="icons icon-zoom-in"></i></a>
												<a href="<?php if(isset($blog_item['link'])) echo $blog_item['link'];?>" class="media-icon"><i class="icons icon-link"></i></a>
											</div>
										</div>
										<?php } ?>
										
										<?php if(isset($blog_item['video'])) echo $blog_item['video']; ?>
										
										<?php if(isset($blog_item['audio'])) { ?>
										<audio>
											<?php if(isset($blog_item['audio']['mp3'])) { ?>
											<source src="<?php echo $blog_item['audio']['mp3']; ?>" type="audio/mpeg">
											<?php } ?>
											
											<?php if(isset($blog_item['audio']['ogg'])) { ?>
											<source src="<?php echo $blog_item['audio']['ogg']; ?>" type="audio/ogg">
											<?php } ?>
											Your browser does not support the audio element.
										</audio>
										<?php } ?>
										
										
										<?php if(isset($blog_item['slideshow'])) { ?>
										<!-- Portfolio Slideshow -->
										<div class="portfolio-slideshow flexslider animate-onscroll">
											
											<ul class="slides">
											
												<?php 
												foreach($blog_item['slideshow'] as $slide){
													echo '<li><img src="'.$slide.'" alt=""></li>';
												}
												?>
												
											</ul>
											
										</div>
										<!-- /Portfolio Slideshow -->
										<?php } ?>
									
									</div>
									<?php } ?>
									
									<div class="post-content">
										
										<div class="post-side-meta">
										
											<div class="date">
												<span class="day"><?php if(isset($blog_item['day'])) echo $blog_item['day'];?></span>
												<span class="month"><?php if(isset($blog_item['month'])) echo $blog_item['month'];?></span>
											</div>
											
											<a href="<?php if(isset($blog_item['link'])) echo $blog_item['link']; ?>"><div class="post-format">
												<i class="icons <?php
													
													switch($blog_item['format']){
														
														case 'standard':
															echo 'icon-doc-text-inv';
														break;
														
														case 'video':
															echo 'icon-video';
														break;
														
														case 'audio':
															echo 'icon-music';
														break;
														
														case 'slideshow':
															echo 'icon-picture';
														break;
														
														case 'blockquote':
															echo 'icon-quote-left';
														break;
														
														case 'link':
															echo 'icon-link';
														break;
														
														default:
															echo 'icon-doc-text-inv';
														break;
														
													}
												
												?>"></i>
											</div></a>
											
											<div class="post-comments">
												<a href="<?php if(isset($blog_item['link'])) echo $blog_item['link'].'#comments';?>"><i class="icons icon-chat-empty"></i> <?php if(isset($blog_item['comments'])) echo $blog_item['comments'];?></a>
											</div>
											
										</div>
										
										<div class="post-header">
											<h2><a href="blog-single-sidebar.php"><?php if(isset($blog_item['title'])) echo $blog_item['title'];?></a></h2>
											<div class="post-meta">
												<span>by <a href="#">admin</a></span>
												<span>in <?php echo $blog_item['categories']; ?></span>
											</div>
										</div>
										
										<div class="post-exceprt">
											
											<?php if($blog_item['format'] != 'blockquote' && $blog_item['format'] != 'link') {?>
											<p><?php if(isset($blog_item['description'])) echo $blog_item['description']; ?></p>
											<?php } ?>
											
											<?php if($blog_item['format'] == 'blockquote'){ ?>
											<blockquote class="iconic-quote"><?php if(isset($blog_item['description'])) echo $blog_item['description']; ?></blockquote>
											<?php } ?>
											
											<?php if($blog_item['format'] == 'link'){ ?>
											<blockquote class="iconic-quote link-quote"><a href="<?php if(isset($blog_item['quote-link'])) echo $blog_item['quote-link']; ?>"><?php if(isset($blog_item['description'])) echo $blog_item['description']; ?></a></blockquote>
											<?php } ?>
											
											<a href="blog-single-sidebar.php" class="button read-more-button big button-arrow">Read More</a>
											
										</div>
										
									</div>
									
								</div>
								<!-- /Blog Post -->