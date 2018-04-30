		
		
		<!--Sidebar Column Start -->
		<div class="col-md-5">
			<!--Sidebar For Browse By Popularity -->
			<div class="row">
				<div class="col-md-12">
						<h3 style="padding-top:30px;">Popular (Most Answerd)</h3>
						<hr>
					
					<ul class="list-group">
					<!--Showing Most Popular Questions By Using Combination of Join and Group By Clause in SQL -->
					<?php 
						$q="select q.q_id, q.question, count(a.answer_id) as Total_Ans from user_questions q JOIN user_answers a on q.q_id=a.question_id group by q.q_id order by Total_Ans desc limit 5";
						$result=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($result)){
					?>
						<a href="question.php?id=<?php echo $row['q_id']; ?>" style="color:black;">
							<li class="list-group-item" style="border:none;">
								<?php echo $row['question']; ?>
							</li>
						</a>
					<?php } ?>
					<a href="browse.php?by=popular">
						<li class="list-group-item" style="border:none; padding-bottom:0;">
							(More)
						</li>
					</a>
					</ul>	
				</div>
			</div>
			<!--Sidebar For Browse By Popularity  Ends Here-->

							
							
				
			<!--Sidebar for Browse By Catogery -->
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h3>Browse By Category</h3>
					</div>
					<ul class="list-group" style="margin-top:30px;">
					<?php 
						$q="select * from questions_cat";
						$result=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($result)){
					?>
						<a href="browse.php?cat=<?php echo $row['cat_id']; ?>" style="color:black;">
							<li class="list-group-item" style="border:none;">
								<?php echo $row['cat']; ?>
							</li>
						</a>
					<?php } ?>
					</ul>
				</div>
			</div>
			<!--Sidebar for Browse By Catogery Ends-->
				
		</div> <!--Sidebar Column Close -->
	</div> <!--Row Close -->
</div> <!--Main Container Close -->
