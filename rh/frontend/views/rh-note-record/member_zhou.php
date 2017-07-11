<?php
<<<<<<< HEAD
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the member display of frontend web.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\MemberAsset;
use frontend\models\RhMemberInfo;
use frontend\models\RhMemberLive;
MemberAsset::register($this);
?>
<head>
<style>
	ul{
		font-size: 150%;
		color:silver;
	}
	h1.project_join,h1.interest{
		color:white;
	}
	h3.name{
		color:white;
	}
</style>
</head>
<body>
	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="agile-logo">
				<h1>RH<span>成员信息</span></h1>
			</div>
			<div class="w3l-banner-grids">
				<div class="col-md-8 w3ls-banner-right">
					<div class="banner-right-img">
						<img src= <?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '李想', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
					</div>
					<div class="banner-right-info">
						<h1 class="interest">兴趣方向：</h1>
						<p>
							<ul>
								<li>
									<?= RhMemberInfo::find()->where(['member_name' => '李想', ])->one()->member_interest; ?>
								</li>
							</ul>
						</p>
						<h1 class="project_join">参与项目:</h1>
						<p>
							<ul>
								<li>互联网数据库</li>
								<li>算法导论</li>
								<li>计算机组成原理</li>
								<li>计算机网络</li>
							</ul>
						</p>
					</div>
					<div class="clearfix"> </div>
					
				</div>
				<div class="col-md-4 w3ls-banner-left">
					<div class="w3ls-banner-left-info">
						<h3 class="name">周睿</h3>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>专业</h4>
						<p>
							<?= RhMemberInfo::find()->where(['member_name' => '周睿', ])->one()->member_major; ?>
						</p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>学历</h4>
						<p>
							<?= RhMemberInfo::find()->where(['member_name' => '周睿', ])->one()->member_degree; ?>
						</p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>职务</h4>
						<p>
							<?= RhMemberInfo::find()->where(['member_name' => '周睿', ])->one()->member_duty; ?>
						</p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>邮箱</h4>
						<p><a href= <?= RhMemberInfo::find()->where(['member_name' => '周睿', ])->one()->member_email; ?>>
							<?= RhMemberInfo::find()->where(['member_name' => '周睿', ])->one()->member_email; ?>
						</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
</body>	
</html>