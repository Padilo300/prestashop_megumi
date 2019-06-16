


{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <nav class="navbar navbar-expand-lg navbar-dark mg-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="mg-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbar">
          <div class="container">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

              {foreach from=$nodes item=node}
                <li class="nav-item {$node.type}{if $node.current} active {/if}"><a class="nav-link" href="{$node.url}">{$node.label}</a></li>
              {/foreach}

            </ul>
          </div>
        </div>
      </nav>
      
    {/if}
{/function}

<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    {menu nodes=$menu.children}
    <div class="clearfix"></div>
</div>
