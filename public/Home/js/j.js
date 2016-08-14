var s = 120;

var sends;

var send_state = "";

function editstate(obj)

{

	send_state = obj;

}

function bindphone()

{

	if ($("#phone").val().length != 11)

	{

		alert("手机号位数不正确");

		return false;

	}

	if ($("#code").val().length != 4)

	{

		alert("验证码不能为空");

		return false;

	}

	$.post("http://www.tongyi.com/index.php/zhiboke/bind_phone", {
		phone : $("#phone").val(),
		code : $("#code").val(),
		info_id : '361834'
	}, function(data) {

		if (data.err == 1)

		{

			if (send_state == "sub")

			{

				$('#yc').show();

				$("#phoneshow").hide();

				$("#bind").hide();

			}

			if (send_state == "order")

			{

				$('#bind').show();

				$('#yc').hide();

				$("#phoneshow").hide();

			}

			setTimeout(function() {

				location.reload();

			}, 3000);

		}

		else

		{

			alert(data.mess);

		}

	}, 'json');

}

function findcode()

{

	sends = setInterval("js()", 1000);

	$("#finds").show();

	$("#findcode").hide();

	if ($("#phone").val().length != 11)

	{

		alert("请输入正确的手机号码！");

		return false;

	}

	$.post("http://www.tongyi.com/index.php/zhiboke/send_sms", {
		phone : $("#phone").val()
	}, function(data) {

		if (data.errorTopic == 0)

		{

		}

		else

		{

			alert("发送错误");

		}

	}, 'json');

}

function js()

{

	$("#finds").text(s + "s");

	s = s - 1;

	if (s < 0)

	{

		s = 120;

		$("#finds").hide();

		$("#findcode").show();

		clearInterval(sends);

	}

}

function addsubscribe()

{

	$.post("http://www.tongyi.com/index.php/zhiboke/addsubscribe", {
		info_id : '361834'
	}, function(data) {

		if (data.err == 1)

		{

			$('#orderSuccess').modal('show');

			setTimeout(function() {

				location.reload();

			}, 3000);

		}

		else

		{

			alert(data.mess);

		}

	}, 'json');

}
