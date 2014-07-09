<script >
	$(function() {
		$("#test").validate({
			// 验证规则
			title: {
				rule: {
					required: true
				},
				success: ' 操作成功'
			}
		})
	}) < /script>