

<section class="mg-main-blog">
    <div class="container">
        <h2>{l s='Последнее из блога' mod='smartblog'}</h2>
        <div class="row" id="my-shuffle">

            {if isset($view_data) AND !empty($view_data)}
                {assign var='i' value=1}
                {foreach from=$view_data item=post}
                    {assign var='img_url' value=$smartbloglink->getImageLink($post.link_rewrite, $post.id, '')}

                    {if $i == 1}
                        <div class="col-md-6 col-lg-6 col-xl-3 box">
                        {elseif $i == 2}
                            <div class="col-md-6 col-lg-6 col-xl-5 box">
                        {elseif $i == 3}
                            <div class="col-md-6 col-lg-6 col-xl-4 box">
                        {elseif $i == 4}
                            <div class="col-md-6 col-lg-6 col-xl-5 box">
                        {elseif $i == 5}
                                {$i = 1}
                    {/if}
                                {$i = ($i + 1)}

                        <div class="mg-main-blog__item">
                            <div class="mg-image">
                                <img src="{$img_url}" alt="{$post.title|escape:'html':'UTF-8'}" title="{$post.title|escape:'html':'UTF-8'}" />
                                <span class="mg-title">{SmartBlogPost::subStr($post.title,60)}</span>
                            </div>
                            <span class="mg-date">{$post.date_added}</span>
                            <p>
                                {$post.short_description}
                            </p>
                            <a class="mg-link" href="{$smartbloglink->getSmartBlogPostLink($post.id,$post.link_rewrite)}"><b>Читать далее</b></a>
                        </div>
                    </div>

                {/foreach}
            {/if}
            <div class="col-1 my-sizer-element"></div>
        </div>
        <a class="mg-btn" href="index.php?fc=module&module=smartblog&controller=category&id_lang=1">Перейти в блог</a>
    </div>
</section>


{*
<div class="block">
    <h2 class='title_block'>{l s='Latest News' mod='smartblog'}</h2>
    <div class="sdsblog-box-content">
        {if isset($view_data) AND !empty($view_data)}
            {foreach from=$view_data item=post}
                {assign var='img_url' value=$smartbloglink->getImageLink($post.link_rewrite, $post.id, 'home-default')}
                <div id="sds_blog_post" class="col-xs-12 col-sm-4 col-md-4">
                    <span class="news_module_image_holder news_home_image_holder">
                        {if $img_url != 'false'}
                            <a href="{$smartbloglink->getSmartBlogPostLink($post.id,$post.link_rewrite)}">
                        <img class="replace-2x img-responsive" src="{$img_url}" alt="{$post.title|escape:'html':'UTF-8'}" title="{$post.title|escape:'html':'UTF-8'}"   itemprop="image" />
                        </a>
                        {/if}
                    </span>
                    <h4 class="sds_post_title sds_post_title_home"><a href="{$smartbloglink->getSmartBlogPostLink($post.id,$post.link_rewrite)}">{SmartBlogPost::subStr($post.title,60)}</a></h4>
                    <i class="icon icon-calendar"></i>
                    <span class="sds_post_date">{$post.date_added}</span>


                </div>
            {/foreach}
        {/if}
    </div>
</div>*}
