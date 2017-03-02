<?hh // strict

class :fbbranding extends :x:element {
  category %flow;

  protected string $tagName = 'fbbranding';

  protected function render(): XHPRoot {
    return
      <span class="branding-el">
        <svg class="icon icon--country-australia--captured">
          <use href="#icon--country-australia--captured" />
        </svg>
        <span class="has-icon">{tr('Powered By Monash')}</span>
      </span>;
  }
}
