<?php 
header ("Content-Type:text/xml");

$content = <<< SHUBHKAMNAVENTURES
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">    
    
SHUBHKAMNAVENTURES;

foreach($postList as $post)
{
  $content .= "<url>"
          . "<loc>". site_url($post['id'].'/'.$post['post_slug'])."/</loc>"
          ."<news:news>"
          ."<news:publication>"
          ."<news:name>CGWEBNEWS.IN</news:name>"
          ."<news:language>hi</news:language>"
          . "</news:publication>"
          ."<news:publication_date>".date_format(date_create($post['post_date']),"Y-m-d")."</news:publication_date>"
          ."<news:title>".$post['post_title']."</news:title>"
          ."</news:news>"
          ."</url>";
}


$content .= <<< SHUBHKAMNAVENTURES
</urlset>         
SHUBHKAMNAVENTURES;

echo $content;
?>