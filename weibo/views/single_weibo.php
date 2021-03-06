<?php $this->load->view('components/home_top') ?>
<div class="wrap  S_bg4  clearfix">
	<div class="main left">
		<div class="weibo_list feed_self">
			<?php if (!isset($weibo)): ?>
				<p class="W_tips W_empty S_txt2"><i class="icon_warnS"></i>咦？没有内容哦~~</p>
			<?php else: ?>
				<div class="item clearfix" data-id="<?php echo $weibo['id'] ?>">
					<div class="detail">
						<div class="content">
							<?php echo $weibo['content'] ?>
						</div>
						<!-- 微博配图 -->
						<?php if ($weibo['picture']): ?>
							<div class="media_prev">
								<ul <?php if(isset($weibo['pic_class'])) echo "class='{$weibo['pic_class']} clearfix'" ?>>
									<?php foreach ($weibo['pic'] as $key => $_v): ?>
										<li>
											<a href="javascript:void(0)"><img src="<?php echo base_url().$weibo['pic_path'].$_v['picture'] ?>" alt=""></a>
											<!-- <i class="ico_loading"></i> -->
										</li>
									<?php endforeach ?>
								</ul>
							</div>
							<div class="media_expand SW_fun2 S_line1 S_bg1"  node-type="feed_list_media_disp">
								<p class="medis_func S_txt3">
									<a class="retract" href="javascript:void(0);"><em class="W_ico12 ico_retract"></em>收起</a><i class="W_vline">|</i>
									<a class="show_big" href="javascript:void(0);" target="_blank"><em class="W_ico12 ico_showbig"></em>查看大图</a><i class="W_vline">|</i>
									<a class="turn_left" href="javascript:void(0);" ><em class="W_ico12 ico_turnleft"></em>向左转</a><i class="W_vline">|</i>
									<a class="turn_right" href="javascript:void(0);"><em class="W_ico12 ico_turnright"></em>向右转</a>
								</p>
								<div>
									<img src="<?php echo base_url('assets/images/blank.gif') ?>" alt="">

								</div>
							</div>
						<?php endif ?>
						<!-- 转发 -->
						<?php if ($weibo['isturn']):?>
							<div class="forwardContent">
								<div class="WB_arrow">
									<em class="S_line1_c">◆</em>
									<span class="S_bg1_c">◆</span>
								</div>
								<?php if (isset($forward)):?>
									<div>
										<a class="name S_func1" href="<?php echo $forward['domain'] ?>">@<?php echo $forward['username'] ?></a>
									</div>
									<div class="content">
										<?php echo $forward['content'] ?>
									</div>
									<!-- 转发的微博配图 -->
									<?php if ($forward['picture']): ?>
										<div class="media_prev">
											<ul <?php if(isset($forward['pic_class'])) echo "class='{$forward['pic_class']} clearfix'" ?>>
												<?php foreach ($forward['pic'] as $key => $_v): ?>
													<li>
														<a href="javascript:void(0)"><img src="<?php echo base_url().$forward['pic_path'].$_v['picture'] ?>" alt=""></a>
													</li>
												<?php endforeach ?>
											</ul>
										</div>
										<div class="media_expand SW_fun2 S_line1 S_bg1"  node-type="feed_list_media_disp">
											<p class="medis_func S_txt3">
												<a class="retract" href="javascript:void(0);"><em class="W_ico12 ico_retract"></em>收起</a><i class="W_vline">|</i>
												<a class="show_big" href="javascript:void(0);" target="_blank"><em class="W_ico12 ico_showbig"></em>查看大图</a><i class="W_vline">|</i>
												<a class="turn_left" href="javascript:void(0);" ><em class="W_ico12 ico_turnleft"></em>向左转</a><i class="W_vline">|</i>
												<a class="turn_right" href="javascript:void(0);"><em class="W_ico12 ico_turnright"></em>向右转</a>
											</p>
											<div>
												<img src="<?php echo base_url('assets/images/blank.gif') ?>" alt="">
											</div>
										</div>
									<?php endif ?>
									<div class="func clearfix S_txt2">
										<div class="from left">
											<a href="#" class="S_func2 time"><?php echo $forward['time'] ?></a> 来自<a href="" class="S_func2">新浪微博</a> 
										</div>
										<div class="handle right">
											<a href="javascript:void(0)"><s class="W_ico20 icon_praised_b"></s>(<?php echo $forward['praise'] ?>)</a><i class="S_txt3">|</i><a href="javascript:void(0)" class="S_func2">转发(<?php echo $forward['turn'] ?>)</a><i class="S_txt3">|</i><a href="javascript:void(0)" class="S_func2">收藏</a><i class="S_txt3">|</i><a href="javascript:void(0)" class="S_func2">评论(<?php echo $forward['comment'] ?>)</a>
										</div>
									</div>
								<?php else: ?>
									<div class="WB_deltxt">
										抱歉，此微博已被作者删除。查看帮助：<a href="">http://t.cn/zWSudZc</a>
									</div>
								<?php endif ?>
							</div>
						<?php endif ?>
						<div class="func clearfix S_txt2">
							<div class="from left">
								<a href="#" class="S_link2 time"><?php echo $weibo['time'] ?></a> 来自<a href="" class="S_link2">新浪微博</a> 
							</div>
							<div class="handle right">
								<a href="javascript:void(0)" action-type="praise"><s class="W_ico20 icon_praised_b"></s>(<?php echo $weibo['praise'] ?>)</a><i class="S_txt3">|</i><a href="javascript:void(0)" action-type="turn" >转发(<?php echo $weibo['turn'] ?>)</a><i class="S_txt3">|</i><a href="javascript:void(0)" action-type="collect">收藏</a><i class="S_txt3">|</i><a href="javascript:void(0)" action-type="comment">评论(<?php echo $weibo['comment'] ?>)</a>
							</div>
						</div>
						<!-- 评论 -->
						<div class="comment S_line1 hide">
							<div class="WB_arrow">
								<em class="S_line1_c">◆</em>
								<span class="S_bg4_c">◆</span>
							</div>
						</div>
						<!-- 评论结束 -->
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
	<?php $this->load->view('components/right_sidebar') ?>
</div>