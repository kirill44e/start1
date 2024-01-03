<!DOCTYPE html>
<html>
<head>
	<title>Вопросики</title>
	@vite(['resources/css/styles.css'])
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style>
		
	</style>
</head>
<body>
	<div class="block_width">
		<h1> Вопросики </h1>

		<div class="div_block1">1 блок</div>
		@vite(['resources/js/script.js'])

		<div class="bl1">
			<div class="d1">
				<div class="block1" id="e">
					<label for="toggle"><p id="pblock">Наши цели и ожидания от отношений сходятся?</p></label>
					<input type="checkbox" id="toggle">
					<div class="d2" id="dd1">
						<div class="block1"><button class="btn" id="btn">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
				<div class="block1" id="e2">
					<label for="toggle2"><p id="pblock2">Как ты относишься к нашим различиям?</p></label>
					<input type="checkbox" id="toggle2">
					<div class="d2" id="dd2">
						<div class="block1"><button class="btn2" id="btn2">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			</div>
			<div class="d1">
				<div class="block1"  id="e3">
					<label for="toggle3"><p id="pblock3">Этот человек, его поведение, его взгляды, вписываются в твои представления
о счастливых отношениях?</p></label>
					<input type="checkbox" id="toggle3">
					<div class="d2" id="dd3">
						<div class="block1"><button class="btn3" id="btn3">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
				<div class="block1"  id="e4">
					<label for="toggle4"><p id="pblock4">Тебе нравится, какая ты рядом с ним?</p></label>
					<input type="checkbox" id="toggle4">
					<div class="d2" id="dd4">
						<div class="block1"><button class="btn4" id="btn4">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="div_block2">2 блок</div>

		<div class="d1">
			<div class="block1"  id="e5"><label for="toggle5"><p id="pblock5">Что для тебя важно в жизни, от чего ты никогда не откажешься?</p></label>
			<input type="checkbox" id="toggle5">
		<div class="d2" id="dd5">
						<div class="block1"><button class="btn5" id="btn5">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1"  id="e6"><label for="toggle6"><p id="pblock6">Какие у тебя цели в данный период жизни?</p></label>
			<input type="checkbox" id="toggle6">
		<div class="d2" id="dd6">
						<div class="block1"><button class="btn6" id="btn6">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
	    </div>
		
		<div class="d1">
			<div class="block1"  id="e7"><label for="toggle7"><p id="pblock7">Что для тебя отношения?</p></label>
			<input type="checkbox" id="toggle7">
		<div class="d2" id="dd7">
						<div class="block1"><button class="btn7" id="btn7">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1" id="e8"><label for="toggle8"><p id="pblock8">Что ты ценишь людях?</p></label>
			<input type="checkbox" id="toggle8">
		<div class="d2" id="dd8">
						<div class="block1"><button class="btn8" id="btn8">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1" id="e9"><label for="toggle9"><p id="pblock9">Есть вещи, которые ты категорически не приемлешь?</p></label>
			<input type="checkbox" id="toggle9">
		<div class="d2" id="dd9">
						<div class="block1"><button class="btn9" id="btn9">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1" id="e10"><label for="toggle10"><p id="pblock10">Что ты не станешь делать ни за какие  деньги?</p></label>
			<input type="checkbox" id="toggle10">
		<div class="d2" id="dd10">
						<div class="block1"><button class="btn10" id="btn10">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1"  id="e11"><label for="toggle11"><p id="pblock11">Чему ты уделяешь больше всего времени?</p></label>
			<input type="checkbox" id="toggle11">
		<div class="d2" id="dd11">
						<div class="block1"><button class="btn11" id="btn11">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1" id="e12"><label for="toggle12"><p id="pblock12">Как ты относишься к переменам?</p></label>
			<input type="checkbox" id="toggle12">
		<div class="d2" id="dd12">
						<div class="block1"><button class="btn12" id="btn12">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1"  id="e13"><label for="toggle13"><p id="pblock13">Если бы ты составлял свод правил в отношениях, какие первые 10 пунктов там бы были?</p></label>
			<input type="checkbox" id="toggle13">
		<div class="d2" id="dd13">
						<div class="block1"><button class="btn13" id="btn13">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="div_block3">3 блок</div>

		<div class="d1">
			<div class="block1" id="e14"><label for="toggle14"><p id="pblock14">Как он говорит про семью, друзей и людей в целом?</p></label>
			<input type="checkbox" id="toggle14">
		<div class="d2" id="dd14">
						<div class="block1"><button class="btn14" id="btn14">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1" id="e15"><label for="toggle15"><p id="pblock15">Как он говорит о прошлых отношениях?</p></label>
			<input type="checkbox" id="toggle15">
		<div class="d2" id="dd15">
						<div class="block1"><button class="btn15" id="btn15">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1" id="e16"><label for="toggle16"><p id="pblock16">Как он ведёт себя с обслуживающим персоналом?</p></label>
			<input type="checkbox" id="toggle16">
		<div class="d2" id="dd16">
						<div class="block1"><button class="btn16" id="btn16">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1"  id="e17"><label for="toggle17"><p id="pblock17">Как он реагирует на возражения и отказы</p></label>
			<input type="checkbox" id="toggle17">
		<div class="d2" id="dd17">
						<div class="block1"><button class="btn17" id="btn17">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1"  id="e18"><label for="toggle18"><p id="pblock18">Где он чаще предпочитает бывать?</p></label>
			<input type="checkbox" id="toggle18">
		<div class="d2" id="dd18">
						<div class="block1"><button class="btn18" id="btn18">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1" id="e19"><label for="toggle19"><p id="pblock19">Как он проявляет эмоции?</p></label>
			<input type="checkbox" id="toggle19">
		<div class="d2" id="dd19">
						<div class="block1"><button class="btn19" id="btn19">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1"  id="e20"><label for="toggle20"><p id="pblock20">Как он справляется конфликтами и проблемами?</p></label>
			<input type="checkbox" id="toggle20">
		<div class="d2" id="dd20">
						<div class="block1"><button class="btn20" id="btn20">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
			<div class="block1" id="e21"><label for="toggle21"><p id="pblock21">Как у него обстоят дела с вредными привычками?</p></label>
			<input type="checkbox" id="toggle21">
		<div class="d2" id="dd21">
						<div class="block1"><button class="btn21" id="btn21">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>

		<div class="d1">
			<div class="block1" id="e22"><label for="toggle22"><p id="pblock22">Нарушает ли он обещания и как часто?</p></label>
			<input type="checkbox" id="toggle22">
		<div class="d2" id="dd22">
						<div class="block1"><button class="btn22" id="btn22">Yes</button></div>
						<div class="block1"><button class="note" id="note">Note</button></div>
					</div>
				</div>
		</div>
	</div>

	<footer>
		Сделано с любовью © 
	</footer>
</body>
</body>
</html>