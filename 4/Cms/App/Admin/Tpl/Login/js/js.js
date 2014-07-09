/*$(function(){
	$('form').validate({
		username:{
			rule:{
				//表示username字段必须添写
				required:true
			},
			error:{
				required:'用户名不能为空'
			}
		} 
	})
})*/
$(function() {
	$('form').validate({
		username: {
			rule: {
				required: true
			},
			error: {
				required: '用户名不能为空'
			}
		},
        password: {
			rule: {
				required: true
			},
			error: {
				required: '密码不能为空'
			}
		},
		code:{
			rule:{
				required:true,
				ajax:CONTROL+'&m=checkCode'
			},
			error:{
				required:'验证码不能为空',
				ajax:'验证码输入错误'
			},
			success:'输入正确'
		}
		

	})
})