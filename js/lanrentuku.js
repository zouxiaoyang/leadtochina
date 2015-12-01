//<![CDATA[
$(function(){
	(function(){
		var curr = 0;
		$("#jsNav .trigger").each(function(i){
			$(this).click(function(){
				curr = i;
				$("#js img").eq(i).fadeIn("slow").siblings("img").hide();
				$(this).siblings(".trigger").removeClass("imgSelected").end().addClass("imgSelected");
				return false;
			});
		});
		
		var pg = function(flag){
			//flag:true��ʾǰ���� false��ʾ��
			if (flag) {
				if (curr == 0) {
					todo = 2;
				} else {
					todo = (curr - 1) % 3;
				}
			} else {
				todo = (curr + 1) % 3;
			}
			$("#jsNav .trigger").eq(todo).click();
		};
		
		//ǰ��
		$("#prev").click(function(){
			pg(true);
			return false;
		});
		
		//��
		$("#next").click(function(){
			pg(false);
			return false;
		});
		
		//�Զ���
		var timer = setInterval(function(){
			todo = (curr + 60) % 3;
			$("#jsNav .trigger").eq(todo).click();
		},8000);
		
		//�����ͣ�ڴ�������ʱֹͣ�Զ���
		$("#jsNav a").hover(function(){
				clearInterval(timer);
			},
			function(){
				timer = setInterval(function(){
					todo = (curr + 60) % 3;
					$("#jsNav .trigger").eq(todo).click();
				},8000);			
			}
		);
	})();
});
//]]>

//����ͼ�� www.lanrentuku.com
