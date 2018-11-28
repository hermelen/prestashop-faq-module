{extends file='page.tpl'}
{block name='page_content'}
<h2>Welcome to our FAQ page!</h2>
<form class="faq-form" action="" method="post">
  <label for="username">Your name:</label>
  <input type="text" name="username" value="">
  <label for="question">Your question:</label>
  <textarea name="question" rows="8" cols="80"></textarea>
  <input type="submit" value="Submit">
</form>
{/block}
