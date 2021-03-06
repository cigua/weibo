<div class="content clearfix">
	<?php $this->load->view('components/common_left_nav');?>
	<div class="main clearfix">
		<div class="box_center left">
			<div class="title">
				<a href="<?php echo site_url('comment/inbox') ?>" class="tit">收到的评论</a>
				<a href="#" class="tit">发出的评论<span class="current"></span></a>
			</div>
			<div class="comment_list">
				<?php foreach ($comment as $v): ?>
					<div class="item clearfix">
						<div class="face">
							<a href="<?php echo $v['domain'] ?>"><img width="50" height="50" src="<?php echo $v['avatar'] ?>" alt=""></a>
						</div>
						<div class="comment">
							<p><?php echo $v['content'] ?></p>
							<p class="S_txt2">评论<a href="<?php echo $v['domain'] ?>"><?php echo $v['username'] ?></a> 的微博：<a href="#">"<?php echo $v['weibo'] ?>"</a></p>
							<p class="S_txt2 info"><?php echo $v['time'] ?> 来自<a href="">iPhone客户端</a><a class="del hide" href="javascript:void(0)" action-type="delete" data-cid="<?php echo $v['id'] ?>">删除</a></p>
						</div>
					</div>
				<?php endforeach ?>
				<div class="item clearfix">
					<div class="face">
						<img width="50" height="50" src="http://localhost/work/weibo/assets/images/2.jpg" alt="">
					</div>
					<div class="comment">
						<p>求中。</p>
						<p class="S_txt2">评论<a href="#">包子包子肉肉</a> 的微博：<a href="#">“请原谅我是个穷逼不能每个人都...”</a></p>
						<p class="S_txt2">1月12日 11:43来自<a href="">iPhone客户端</a><a class="del hide" href="">删除</a></p>
					</div>
				</div>
				<div class="item clearfix">
					<div class="face">
						<img width="50" height="50" src="http://localhost/work/weibo/assets/images/01.jpg" alt="">
					</div>
					<div class="comment">
						<p>ios7今天可以更新升级了…</p>
						<p class="S_txt2">评论<a href="#">Babyface_乖乖M</a> 的微博：<a href="#">“迎新生晚会错过了，在行李箱里找...”</a></p>
						<p class="S_txt2">1月12日 11:43来自<a href="">iPhone客户端</a><a class="del hide" href="">删除</a></p>
					</div>
				</div>
				<div class="item clearfix">
					<div class="face">
						<img width="50" height="50" src="http://localhost/work/weibo/assets/images/04.jpg" alt="">
					</div>
					<div class="comment">
						<p>*^o^*</p>
						<p class="S_txt2">评论<a href="#">苍井空</a> 的微博：<a href="#">“今天我有了一个开会→健身→声乐→...”</a></p>
						<p class="S_txt2">1月12日 11:43来自<a href="">iPhone客户端</a><a class="del hide" href="">删除</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="box_right right">
			<div class="item">
				<fieldset>
					<legend class="title">消息箱使用小帮助</legend>
				</fieldset>
				<div class="qa S_txt2">
					<i class="W_ico16 ico_q"></i>：什么是消息箱？<br/>
					A：是将@我的，评论，赞，私信等消息相关类-服务综合在一起的消息中心，在这里可以看到所有的消息提示。<br>
					<a href="#">点击这里提交意见反馈</a>
				</div>
			</div>
			<div class="item">
				<fieldset>
					<legend class="title">新浪微博意见反馈</legend>
				</fieldset>
				<div class="qa S_txt2">
					欢迎使用新浪微博并提出宝贵建议。请<a href="">点击这里</a>提交微博意见反馈。<br>
					<a href="#">微博常见问题</a><br>
					<a href="#">微博客服专区</a><br>
					<a href="#">全国人大常委会《关于加强网络信息保护的决定》</a>
				</div>
			</div>
		</div>
	</div>
</div>