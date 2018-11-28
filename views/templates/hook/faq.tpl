<!-- Block faq -->
<div id="faq_block_home" class="block">
  <h4>Welcome!</h4>
  <div class="block_content">
    <p>Hello,
       {if isset($faq_name) && $faq_name}
           {$faq_name}
       {else}
           World
       {/if}
       !
    </p>
    <ul>
      <li><a href="{$faq_link}" title="Click this link">Click me!</a></li>
    </ul>
  </div>
</div>
<!-- /Block faq -->
