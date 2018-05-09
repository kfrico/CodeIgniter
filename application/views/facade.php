<?php 
require_once('php_include/pdo.php');  //資料庫連線
require_once('php_include/function.php');  //一些funtion
require_once("templates/html_header.php"); 
?>

<div class="left_container">

<div class="left_column">

    <div class="musicColumn" id="new_released">        

        <div id="tabs">

            <ul>

                <li><a href="#new_released-chinese">華語新發行</a></li>

                <li><a href="#new_released-western">西洋新發行</a></li>

                <li><a href="#new_released-jk">日韓新發行</a></li>

            </ul>

            <div id="new_released-chinese">    <!-- 新發行-華語 -->
                <ul id="carousel_chinese" class="carousel">

                    <?php  foreach($c_ret as $value) { ?>
                    <li>

                        <div class="thumbnail_box"><a href="album.php?id=<?php echo $value["AlbumID"]?>"><img src="libraries/timthumb.php?src=<?php echo noImage($value["AlbumPic"]); ?>&w=120&h=120&a=t" title="<?php echo $value["Album"]; ?>"></a></div>         

                        <h6 class="p1"><a href="album.php?id=<?php echo $value["AlbumID"]?>" class="tipme-right" rel="get_album" data="<?php echo $value["Album"];?>" id="<?php echo $value["AlbumID"];?>"><?php echo shorten($value["Album"],10);?></a></h6><!--專輯名稱(華語)-->

                        <p class="singer"><a href="celebrity.php?id=<?php echo $value["CelebrityID"]?>" class="tipme-right" rel="get_celebrity" data="<?php echo $value["Name"];?>" id="<?php echo $value["CelebrityID"];?>"><?php echo ($value["Name"]);?></a></p><!--歌手名稱(華語)-->

                    </li>
                    <?php  }?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="carousel_chinese_prev" href="#"><span>prev</span></a>
                        <a class="next" id="carousel_chinese_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_carousel_chinese" class="pagination_wrapper"></div>
                </div>
            </div> 

            <div id="new_released-western">    <!-- 新發行-西洋 -->
                <ul id="carousel_western" class="carousel">

                    <?php foreach($u_ret as $value1) { ?>
                    <li>

                        <div class="thumbnail_box"><a href="album.php?id=<?php echo $value1["AlbumID"]?>"><img src="libraries/timthumb.php?src=/<?php echo noImage($value1["AlbumPic"]); ?>&w=120&h=120&a=t"  title="<?php echo $value1["Album"]; ?>"></a></div>

                        <h6 class="p1"><a href="album.php?id=<?php echo $value1["AlbumID"]?>" class="tipme-right" rel="get_album" data="<?php echo $value1["Album"];?>" id="<?php echo $value1["AlbumID"];?>"><?php echo shorten($value1["Album"],12);?></a></h6><!--專輯名稱(西洋)-->

                        <p class="singer"><a href="celebrity.php?id=<?php echo $value1["CelebrityID"]?>" class="tipme-right" rel="get_celebrity" data="<?php echo $value1["Name"];?>" id="<?php echo $value1["CelebrityID"];?>"><?php echo shorten($value1["Name"], 12);?></a></p><!--歌手名稱(西洋)-->

                    </li>
                    <?php  } ?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="carousel_western_prev" href="#"><span>prev</span></a>
                        <a class="next" id="carousel_western_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_carousel_western" class="pagination_wrapper"></div>
                </div>
            </div> 

            <div id="new_released-jk">   <!-- 新發行-日韓 -->
                <ul id="carousel_jk" class="carousel">

                    <?php foreach($j_ret as $value2) { ?>
                    <li>

                        <div class="thumbnail_box"><a href="album.php?id=<?php echo $value2["AlbumID"]?>"><img src="libraries/timthumb.php?src=/<?php echo noImage($value2["AlbumPic"]); ?>&w=120&h=120&a=t"  title="<?php echo $value2["Album"]; ?>"></a></div>

                        <h6 class="p1"><a href="album.php?id=<?php echo $value2["AlbumID"]?>" class="tipme-right" rel="get_album" data="<?php echo $value2["Album"];?>" id="<?php echo $value2["AlbumID"];?>"><?php echo shorten($value2["Album"],10);?></a></h6><!--專輯名稱(日韓)-->

                        <p class="singer"><a href="celebrity.php?id=<?php echo $value2["CelebrityID"]?>" class="tipme-right" rel="get_celebrity" data="<?php echo $value2["Name"];?>" id="<?php echo $value2["CelebrityID"];?>"><?php echo shorten($value2["Name"], 12);?></a></p><!--歌手名稱(日韓)-->

                    </li>
                    <?php  }?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="carousel_jk_prev" href="#"><span>prev</span></a>
                        <a class="next" id="carousel_jk_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_carousel_jk" class="pagination_wrapper"></div>
                </div>
            </div>

        </div> 

    </div><!--new_released END-->     

    <div class="musicColumn" id="music-life01"><!-- music-life01 -->     

        <div id="tabs1">

            <ul>

            <li><a href="#music-life01-msc" id="short">樂評</a></li>

            <li><a href="#music-life01-mvc" id="short">影評</a></li>

            <li><a href="#music-life01-mix">音樂跨界</a></li>
            
            <li><a href="#music-life01-spotlight">專題報導</a></li>
            
            <li><a href="#music-life01-recommend">本周推薦</a></li>

            </ul>
            
            <div id="music-life01-msc">  <!-- 樂評 -->               

                <ul id="life01_msc" class="carousel">

                <?php $i = 0; do { ?>
                     
                <li>

                    <div class="thumbnail_box"><a href="music_critics_detail.php?id=<?php echo $music_comments[$i]["CommentID"]?>&type=music"><div class="mask"></div><div class="album_name"><span><?php echo $music_comments[$i]["name"];?></span></div><img src="libraries/timthumb.php?src=/<?php echo noImage($music_comments[$i]["pic"]); ?>&w=155&h=155&a=t" title="<?php echo $music_comments[$i]["name"]; ?>" class="album_img" /></a></div>

                    <p class="p2 text-2-2"><a href="music_critics_detail.php?id=<?php echo $music_comments[$i]["CommentID"]?>&type=music" class="tipme-right" id="<?php echo $music_comments[$i]["CommentID"] ?>" rel="get_musicComment" data="<?php echo $music_comments[$i]["name"]; ?>"><?php echo shorten($music_comments[$i]["Comment"],24);?></a></p>                 

                </li>
                <?php $i++; } while($i < 6)?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="life01_msc_prev" href="#"><span>prev</span></a>
                        <a class="next" id="life01_msc_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_life01_msc" class="pagination_wrapper"></div>
                </div>

            </div>

            <div id="music-life01-mvc">  <!-- 影評 -->               

                <ul id="life01_mvc" class="carousel">

                <?php $i = 0; do { ?>        
                <li>

                    <div class="thumbnail_box"><a href="movie_critics_detail.php?id=<?php echo $movie_comments[$i]["id"]?>&type=movie"><div class="mask"></div><div class="album_name"><span><?php echo $movie_comments[$i]["name"];?></span></div><img src="libraries/timthumb.php?src=/<?php echo noImage($movie_comments[$i]["pic"]); ?>&w=155&h=155&a=t" title="<?php echo $movie_comments[$i]["name"]; ?>" class="album_img" /></a></div>

                    <p class="p2 text-2-2"><a href="movie_critics_detail.php?id=<?php echo $movie_comments[$i]["id"]?>&type=movie" class="tipme-right" id="<?php echo $movie_comments[$i]["id"] ?>" rel="get_movieComment" data="<?php echo $movie_comments[$i]["name"]; ?>"><?php echo shorten($movie_comments[$i]["Comment"], 24);?></a></p>               

                </li>
                <?php $i++; } while($i < 6)?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="life01_mvc_prev" href="#"><span>prev</span></a>
                        <a class="next" id="life01_mvc_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_life01_mvc" class="pagination_wrapper"></div>
                </div>

            </div>           

            <div id="music-life01-mix">  <!-- 跨界 -->
                <ul id="life01_mix" class="carousel">

                <?php $i = 0; do { ?>        
                <li>

                    <div class="thumbnail_box"><a href="column_info.php?id=<?php echo $music_cross_comments[$i]["id"] ?>&type=<?php echo $music_cross_comments[$i]["type"]?>"><img src="libraries/timthumb.php?src=/<?php echo noImage($music_cross_comments[$i]["homeImage"]); ?>&w=155&h=155&a=t" title="<?php echo $music_cross_comments[$i]["title"]; ?>"></a></div>

                    <p class="p2 text-2-2"><a href="column_info.php?id=<?php echo $music_cross_comments[$i]["id"] ?>&type=<?php echo $music_cross_comments[$i]["type"]?>" class="tipme-right" id="<?php echo $music_cross_comments[$i]["id"] ?>" rel="get_article" data="<?php echo $music_cross_comments[$i]["title"] ?>"><?php echo shorten($music_cross_comments[$i]["title"],24);?></a></p>                 

                </li>
                <?php $i++; } while($i < 6)?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="life01_mix_prev" href="#"><span>prev</span></a>
                        <a class="next" id="life01_mix_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_life01_mix" class="pagination_wrapper"></div>
                </div>

            </div>

            <div id="music-life01-spotlight">  <!-- 音樂專題報導 -->               
                <ul id="life01_spotlight" class="carousel">

                <?php $i = 0; do { ?>        
                <li>

                    <div class="thumbnail_box"><a href="column_info.php?id=<?php echo $music_theme_comments[$i]["id"]?>&type=<?php echo $music_theme_comments[$i]["type"]?>"><img src="libraries/timthumb.php?src=/<?php echo noImage($music_theme_comments[$i]["homeImage"]); ?>&w=155&h=155&a=t" title="<?php echo $music_theme_comments[$i]["title"]; ?>"></a></div>

                    <p class="p2 text-2-2"><a href="column_info.php?id=<?php echo $music_theme_comments[$i]["id"]?>&type=<?php echo $music_theme_comments[$i]["type"]?>" class="tipme-right" id="<?php echo $music_theme_comments[$i]["id"] ?>" rel="get_article" data="<?php echo $music_theme_comments[$i]["title"];?>"><?php echo shorten($music_theme_comments[$i]["title"], 24);?></a></p>          

                </li>
                <?php $i++; } while($i < 6)?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="life01_spotlight_prev" href="#"><span>prev</span></a>
                        <a class="next" id="life01_spotlight_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_life01_spotlight" class="pagination_wrapper"></div>
                </div>

            </div> 

            <div id="music-life01-recommend">  <!-- 本週推薦歌曲 -->               

                <ul id="life01_recommend" class="carousel">

                <?php $i = 0; do { ?>
                     
                <li>

                    <div class="thumbnail_box"><a href="weekly_songs_details.php?id=<?php echo $weekly_songs_rank[$i]["ID"] ?>"><img src="libraries/timthumb.php?src=/<?php echo noImage($weekly_songs_rank[$i]["RankPic"]); ?>&w=155&h=155&a=t" title="<?php echo $weekly_songs_rank[$i]["RankTitle"]; ?>" /></a></div>

                    <p class="p2 text-2-2"><a href="weekly_songs_details.php?id=<?php echo $weekly_songs_rank[$i]["ID"] ?>" class="tipme-right" id="<?php echo $weekly_songs_rank[$i]["ID"] ?>" rel="get_recommend" data="<?php echo $weekly_songs_rank[$i]["RankTitle"]; ?>"><?php echo shorten($weekly_songs_rank[$i]["RankTitle"],24);?></a></p>                 

                </li>
                <?php $i++; } while($i < 3)?>

                </ul>
                <div class="clearfix"></div>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="life01_recommend_prev" href="#"><span>prev</span></a>
                        <a class="next" id="life01_recommend_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_life01_recommend" class="pagination_wrapper"></div>
                </div>

            </div>

        </div> 

    </div><!--music-life01 END-->
    
























    
     <div class="musicColumn" id="music-life02"><!--music-life02 -->

        <div id="tabs2">

            <ul>

                <li><a href="#music-life02-chinese">華語音樂新聞</a></li>

                <li><a href="#music-life02-western">西洋音樂新聞</a></li>

                <li><a href="#music-life02-jk">日韓音樂新聞</a></li>

            </ul>
        <?php        
                  $News=$DBConn->prepare("SELECT id,homeImage,title,context,publishedTime as time FROM article
                                         WHERE type=:type and status='open' ORDER BY publishedTime DESC");
                  $News->bindValue(':type',5,PDO::PARAM_STR);
                  $News->execute();
      
                  $NewsResults=$News->fetchAll(PDO::FETCH_ASSOC);
    
                ?>
       
            <div id="music-life02-chinese">  <!-- 音樂新聞-華語 --> 
            
            <table width="95%" border="0" cellspacing="0" cellpadding="6">
              
              <tr>
                
                <th align="center" width="24%"><a href="column_info.php?id=<?php echo $NewsResults[0]["id"]?>&type=news"><img src="libraries/timthumb.php?src=/<?php echo noImage($NewsResults[0]["homeImage"]); ?>&w=115&h=115&a=t" title="<?php echo $NewsResults[0]["title"]; ?>" /></a></th>
                
                <td align="left" width="76%"><h6 class="p1-1 indent-top1 text-2"><a href="column_info.php?id=<?php echo $NewsResults[0]["id"]?>&type=news" class="tipme-right" data="<?php echo $NewsResults[0]["title"];?>" id="<?php echo $NewsResults[0]["id"] ;?>" rel="get_article"><?php echo shorten($NewsResults[0]["title"], 22) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($NewsResults[0]["time"]); ?></span></h6>

                
                <p class="text-2"><?php echo shorten($NewsResults[0]["context"], 120) ;?></p></td>
              
              </tr>
            
            </table>  
                    
            <div style="text-align:left;margin:0 17px 12px 17px">
            
                 <?php $i = 1; do { ?>                

                   <img src="images/icons/news_icon.gif" width="10" height="10" style="float:left;margin:4px 4px 0 0" />
                   
            <h6 class="p0-1 text-2-1"><a href="column_info.php?id=<?php echo $NewsResults[$i]["id"]?>&type=news" class="tipme-right" data="<?php echo $NewsResults[$i]["title"];?>" id="<?php echo $NewsResults[$i]["id"] ;?>" rel="get_article"><?php echo shorten($NewsResults[$i]["title"], 36) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($NewsResults[$i]["time"]); ?></span></h6>                  
                      
                <?php $i++; } while($i < 5)?> 

            </div>

            </div>

                        
                 <?php        
                  $News1=$DBConn->prepare("SELECT id,homeImage,title,context,publishedTime as time FROM article 
                                            WHERE type=:type  and status='open' ORDER BY publishedTime DESC");
                  $News1->bindValue(':type',17,PDO::PARAM_STR);
                  $News1->execute();
      
                  $NewsResults1=$News1->fetchAll(PDO::FETCH_ASSOC);
    
                ?>
                
            <div id="music-life02-western">  <!-- 音樂新聞-西洋 -->  

            <table width="95%" border="0" cellspacing="0" cellpadding="6">
              
              <tr>
                
                <th align="center" width="24%"><a href="column_info.php?id=<?php echo $NewsResults1[0]["id"]?>&type=westnews"><img src="libraries/timthumb.php?src=/<?php echo noImage($NewsResults1[0]["homeImage"]); ?>&w=115&h=115&a=t" title="<?php echo $NewsResults1[0]["title"]; ?>" /></a></th>
                
                <td align="left" width="76%"><h6 class="p1-1 indent-top1 text-2"><a href="column_info.php?id=<?php echo $NewsResults1[0]["id"]?>&type=westnews" class="tipme-right" data="<?php echo $NewsResults1[0]["title"];?>" id="<?php echo $NewsResults1[0]["id"] ;?>" rel="get_article"><?php echo shorten($NewsResults1[0]["title"], 22) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($NewsResults1[0]["time"]); ?></span></h6>

                
                <p class="text-2"><?php echo shorten($NewsResults1[0]["context"], 120) ;?></p></td>
              
              </tr>
            
            </table>  
                    
            <div style="text-align:left;margin:0 17px 12px 17px">
            
                 <?php $i = 1; do { ?>     
                 
                 <img src="images/icons/news_icon.gif" width="10" height="10" style="float:left;margin:4px 4px 0 0" />           

                   <h6 class="p0-1 text-2-1"><a href="column_info.php?id=<?php echo $NewsResults1[$i]["id"]?>&type=westnews" class="tipme-right" data="<?php echo $NewsResults1[$i]["title"];?>" id="<?php echo $NewsResults1[$i]["id"] ;?>" rel="get_article"><?php echo shorten($NewsResults1[$i]["title"], 36) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($NewsResults1[$i]["time"]); ?></span></h6>                  
                      
                <?php $i++; } while($i < 5)?> 

            </div>

            </div>

            <div id="music-life02-jk">  <!-- 音樂新聞-日韓 -->               
                <?php        
                  $News2=$DBConn->prepare("SELECT id,homeImage,title,context,publishedTime as time FROM article 
                                            WHERE type=:type and status='open' ORDER BY publishedTime DESC");
                  $News2->bindValue(':type',18,PDO::PARAM_STR);
                  $News2->execute();
                  $NewsResults2=$News2->fetchAll(PDO::FETCH_ASSOC);
                ?>

            <table width="95%" border="0" cellspacing="0" cellpadding="6">
              
              <tr>
                
                <th align="center" width="24%"><a href="column_info.php?id=<?php echo $NewsResults2[0]["id"]?>&type=jknews"><img src="libraries/timthumb.php?src=/<?php echo noImage($NewsResults2[0]["homeImage"]); ?>&w=115&h=115&a=t" title="<?php echo $NewsResults2[0]["title"]; ?>" /></a></th>
                
                <td align="left" width="76%"><h6 class="p1-1 indent-top1 text-2"><a href="column_info.php?id=<?php echo $NewsResults2[0]["id"]?>&type=jknews" class="tipme-right" data="<?php echo $NewsResults2[0]["title"];?>" id="<?php echo $NewsResults2[0]["id"] ;?>" rel="get_article"><?php echo shorten($NewsResults2[0]["title"], 22) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($NewsResults2[0]["time"]); ?></span></h6>

                
                <p class="text-2"><?php echo shorten($NewsResults2[0]["context"], 120) ;?></p></td>
              
              </tr>
            
            </table>  
                    
            <div style="text-align:left;margin:0 17px 12px 17px">
            
                 <?php $i = 1; do { ?>       
                 
                 <img src="images/icons/news_icon.gif" width="10" height="10" style="float:left;margin:4px 4px 0 0" />         

                   <h6 class="p0-1 text-2-1"><a href="column_info.php?id=<?php echo $NewsResults2[$i]["id"]?>&type=jknews" class="tipme-right" data="<?php echo $NewsResults2[$i]["title"];?>" id="<?php echo $NewsResults2[$i]["id"] ;?>" rel="get_article"><?php echo shorten($NewsResults2[$i]["title"], 36) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($NewsResults2[$i]["time"]); ?></span></h6>                  
                      
                <?php $i++; } while($i < 5)?> 

            </div>

            </div>

        </div>         

    </div><!--music-life02 END-->     

    <div class="musicColumn" id="music-life03"><!--music-life03 END-->     

        <div id="tabs3">

            <ul>     

            <li><a href="#music-life03-talk">聊音樂</a></li>

            <li><a href="#music-life03-story">我的音樂故事</a></li>
            
            <li><a href="#music-life03-letter">寫給藝人的一封信</a></li>

            </ul>

            <div id="music-life03-talk">  <!-- 聊音樂 -->               
                <?php        
                $talk=$DBConn->prepare("SELECT id,homeImage,title,context,publishedTime as time FROM article 
                                        WHERE type=:type and status='open' ORDER BY publishedTime DESC");
                $talk->bindValue(':type',3,PDO::PARAM_STR);
                $talk->execute();
                $talkResult=$talk->fetchAll(PDO::FETCH_ASSOC);
                ?>

            <table width="95%" border="0" cellspacing="0" cellpadding="6">
              
              <tr>
                
                <th align="center" width="24%"><a href="column_info.php?id=<?php echo $talkResult[0]["id"]?>&type=talk"><img src="libraries/timthumb.php?src=/<?php echo noImage($talkResult[0]["homeImage"]); ?>&w=115&h=115&a=t" title="<?php echo $talkResult[0]["title"]; ?>" /></a></th>
                
                <td align="left" width="76%"><h6 class="p1-1 indent-top1 text-2"><a href="column_info.php?id=<?php echo $talkResult[0]["id"]?>&type=talk" class="tipme-right" data="<?php echo $talkResult[0]["title"];?>" id="<?php echo $talkResult[0]["id"] ;?>" rel="get_article"><?php echo shorten($talkResult[0]["title"], 22) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($talkResult[0]["time"]); ?></span></h6>

                
                <p class="text-2"><?php echo shorten($talkResult[0]["context"], 120) ;?></p></td>
              
              </tr>
            
            </table>  
                    
            <div style="text-align:left;margin:0 17px 12px 17px">
            
                 <?php $i = 1; do { ?>     
                 
                 <img src="images/icons/news_icon.gif" width="10" height="10" style="float:left;margin:4px 4px 0 0" />           

                   <h6 class="p0-1 text-2-1"><a href="column_info.php?id=<?php echo $talkResult[$i]["id"]?>&type=talk" class="tipme-right" data="<?php echo $talkResult[$i]["title"];?>" id="<?php echo $talkResult[$i]["id"] ;?>" rel="get_article"><?php echo shorten($talkResult[$i]["title"], 36) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($talkResult[$i]["time"]); ?></span></h6>                  
                      
                <?php $i++; } while($i < 5)?> 

            </div>

            </div>                     

            <div id="music-life03-story">  <!-- 我的音樂故事 -->               
                <?php        
                $story=$DBConn->prepare("SELECT id,homeImage,title,context,publishedTime as time FROM article 
                                        WHERE type=:type and status='open' ORDER BY publishedTime DESC");
                $story->bindValue(':type',4,PDO::PARAM_STR);
                $story->execute();
                $storyResult=$story->fetchAll(PDO::FETCH_ASSOC);
                ?>
            <table width="95%" border="0" cellspacing="0" cellpadding="6">
              
              <tr>
                
                <th align="center" width="24%"><a href="column_info.php?id=<?php echo $storyResult[0]["id"]?>&type=story"><img src="libraries/timthumb.php?src=/<?php echo noImage($storyResult[0]["homeImage"]); ?>&w=115&h=115&a=t" title="<?php echo $storyResult[0]["title"]; ?>" /></a></th>
                
                <td align="left" width="76%"><h6 class="p1-1 indent-top1 text-2"><a href="column_info.php?id=<?php echo $storyResult[0]["id"]?>&type=story" class="tipme-right" data="<?php echo $storyResult[0]["title"];?>" id="<?php echo $storyResult[0]["id"] ;?>" rel="get_article"><?php echo shorten($storyResult[0]["title"], 22) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($storyResult[0]["time"]); ?></span></h6>

                
                <p class="text-2"><?php echo shorten($storyResult[0]["context"], 120) ;?></p></td>
              
              </tr>
            
            </table>  
                    
            <div style="text-align:left;margin:0 17px 12px 17px">
            
                 <?php $i = 1; do { ?>     
                 
                 <img src="images/icons/news_icon.gif" width="10" height="10" style="float:left;margin:4px 4px 0 0" />           

                   <h6 class="p0-1 text-2-1"><a href="column_info.php?id=<?php echo $storyResult[$i]["id"]?>&type=story" class="tipme-right" data="<?php echo $storyResult[$i]["title"];?>" id="<?php echo $storyResult[$i]["id"] ;?>" rel="get_article"><?php echo shorten($storyResult[$i]["title"], 36) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($storyResult[$i]["time"]); ?></span></h6>                  
                      
                <?php $i++; } while($i < 5)?> 

            </div>

            </div>
            
            <div id="music-life03-letter">  <!-- 寫給藝人的一封信 -->               
                <?php        
                $ForSinger=$DBConn->prepare("SELECT id,homeImage,title,context,publishedTime as time FROM article 
                                            WHERE type=:type and status='open' ORDER BY publishedTime DESC");
                $ForSinger->bindValue(':type',16,PDO::PARAM_STR);
                $ForSinger->execute();
                $ForResult=$ForSinger->fetchAll(PDO::FETCH_ASSOC);
                ?>

            <table width="95%" border="0" cellspacing="0" cellpadding="6">
              
              <tr>
                
                <th align="center" width="24%"><a href="column_info.php?id=<?php echo $ForResult[0]["id"]?>&type=dearfrom"><img src="libraries/timthumb.php?src=/<?php echo noImage($ForResult[0]["homeImage"]); ?>&w=115&h=115&a=t" title="<?php echo $ForResult[0]["title"]; ?>" /></a></th>
                
                <td align="left" width="76%"><h6 class="p1-1 indent-top1 text-2"><a href="column_info.php?id=<?php echo $ForResult[0]["id"]?>&type=dearfrom" class="tipme-right" data="<?php echo $ForResult[0]["title"];?>" id="<?php echo $ForResult[0]["id"] ;?>" rel="get_article"><?php echo shorten($ForResult[0]["title"], 22) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($ForResult[0]["time"]); ?></span></h6>

                
                <p class="text-2"><?php echo shorten($ForResult[0]["context"], 120) ;?></p></td>
              
              </tr>
            
            </table>  
                    
            <div style="text-align:left;margin:0 17px 12px 17px">
            
                 <?php $i = 1; do { ?>     
                 
                 <img src="images/icons/news_icon.gif" width="10" height="10" style="float:left;margin:4px 4px 0 0" />           

                   <h6 class="p0-1 text-2-1"><a href="column_info.php?id=<?php echo $ForResult[$i]["id"]?>&type=dearfrom" class="tipme-right" data="<?php echo $ForResult[$i]["title"];?>" id="<?php echo $ForResult[$i]["id"] ;?>" rel="get_article"><?php echo shorten($ForResult[$i]["title"], 36) ;?></a>&nbsp;&nbsp;&nbsp;<span style="color:#BDBDBD;font-weight:normal;font-size:11px"><?php echo article_publish($ForResult[$i]["time"]); ?></span></h6>                  
                      
                <?php $i++; } while($i < 5)?> 

            </div>

            </div>              
            
         </div>

    </div><!--music-life03 END-->

</div>

</div><!--left_column END-->

<div class="right_container">

    <div class="right_column">

        <div class="right_contents" id="billboard">

            <div id="tabs4">
            
            <a href="weekbillboard.php" class="more"><img src="images/icons/more_icon.jpg" width="36" height="11" /></a>
            
                <ul>

                <li><a href="#billboard-chinese">PlayMusic綜合榜</a></li>

                </ul>

                <div id="billboard-chinese">  <!-- 排行榜-華語 -->     

                    <?php
                    $billboard=$DBConn->prepare("SELECT b.Album, b.Singer, b.Date_from, b.Date_to, m.AlbumID, m.AlbumPic, c.CelebrityID FROM tblbillboard_album as b                                
                                                JOIN tblcelebrity as c ON c.Name =  b.Singer 
                                                JOIN tblMusic as m ON m.Album = b.Album AND m.Singer = c.CelebrityID
                                                WHERE b.Category = :musictype 
                                                AND b.Date_from like :Date_from
                                                AND b.Week_no = (SELECT MAX(Week_no) FROM tblbillboard_album WHERE Category = :musictype and Date_from like :Date_from) 
                                                GROUP BY b.Album
                                                ORDER BY Rank ASC");
                    $billboard->bindValue(':musictype','華語專輯',PDO::PARAM_STR);
                    $billboard->bindValue(':Date_from','%'.date('Y').'%',PDO::PARAM_STR);
            
                    $billboard->execute();
                    $billboardResult=$billboard->fetchAll(PDO::FETCH_ASSOC);
                    $dateRange = '<b>'.$billboardResult[0]["Date_from"]."</b> 至 <b>".$billboardResult[0]["Date_to"]."</b>";                 
                    ?>
                    
                   <div class="text-1" style="float:left;margin:-6px 0 0 30px;font-weight:bold">華語專輯榜</div><div class="text-3" style="float:right"><?php echo $dateRange; ?></div>
                   
                   <br style="clear:both" />
                    
                    <div class="billboard_no1">
                    
                    <div class="billboard_no1_trophy"></div> 
                    
                        <a href="album.php?id=<?php echo $billboardResult[0]["AlbumID"]?>"><img src="libraries/timthumb.php?src=/<?php echo noImage($billboardResult[0]["AlbumPic"]); ?>&w=130&h=132&a=t" title="<?php echo $billboardResult[0]["Album"]; ?>"></a><br />                             
                        <h4 class="p0 center text-2"><a href="album.php?id=<?php echo $billboardResult[0]["AlbumID"]?>" class="tipme-left" rel="get_album" data="<?php echo $billboardResult[0]["Album"]; ?>" id="<?php echo $billboardResult[0]["AlbumID"]; ?>"><?php echo shorten($billboardResult[0]["Album"],20);?></a></h4>
                        <p class="p0 center text-2"><a href="album.php?id=<?php echo $billboardResult[0]["AlbumID"]?>" class="tipme-left" rel="get_celebrity" data="<?php echo $billboardResult[0]["Singer"]; ?>" id="<?php echo $billboardResult[0]["CelebrityID"]; ?>"><?php echo $billboardResult[0]["Singer"]; ?></a></p>                    
                    
                    </div>
                    
                    <div class="billboard_2to5">
                    
                        <ul>
                        
                            <?php $i = 1; while($i < 5) { ?>  
                            
                            <li>      

                                <div class="extra-wrap">
                                    <div class="text-rank"><?php echo $i+1; ?></div>
                                    <h4 class="p0 text-2-2"><a href="album.php?id=<?php echo $billboardResult[$i]["AlbumID"]?>" class="tipme-left" rel="get_album" data="<?php echo $billboardResult[$i]["Album"]; ?>" id="<?php echo $billboardResult[$i]["AlbumID"]; ?>"><?php echo shorten($billboardResult[$i]["Album"],23);?></a></h4>
                                    <p class="p0 text-2-2"><a href="celebrity.php?id=<?php echo $billboardResult[$i]["CelebrityID"]; ?>" class="tipme-left" rel="get_celebrity" data="<?php echo $billboardResult[$i]["Singer"]; ?>" id="<?php echo $billboardResult[$i]["CelebrityID"]; ?>"><?php echo shorten($billboardResult[$i]["Singer"],23); ?></a></p>
                                </div>
                            </li>
                           <?php  $i++; } ?> 
                        </ul>
                    </div>
                    
                    <br style="clear:both" />
                    <br />
                    
                    <?php
                    $billboard1=$DBConn->prepare("SELECT b.Song, b.Singer, b.Date_from, b.Date_to, c.CelebrityID, c.Name, m.AlbumID, m.AlbumPic FROM tblbillboard_song as b 
                                                JOIN tblcelebrity as c ON c.Name = b.Singer 
                                                JOIN tblMusic as m ON m.Album = b.Album AND m.Singer = c.CelebrityID
                                                WHERE b.Category = :musictype 
                                                AND Date_from like :Date_from
                                                AND Week_no = (SELECT MAX(Week_no) FROM tblbillboard_song WHERE Category = :musictype and Date_from like :Date_from) 
                                                GROUP BY b.Song
                                                ORDER BY Rank ASC LIMIT 5");
                    $billboard1->bindValue(':musictype','華語歌曲',PDO::PARAM_STR);
                    $billboard1->bindValue(':Date_from','%'.date('Y').'%',PDO::PARAM_STR);
            
                    $billboard1->execute();                 
                    $billboardResult1=$billboard1->fetchAll(PDO::FETCH_ASSOC);                  
                    ?>
                   <div class="text-1" style="float:left;margin:-6px 0 0 30px;font-weight:bold">華語歌曲榜</div>
                   
                   <br style="clear:both" />
                    
                    <div class="billboard_no1">
                    
                    <div class="billboard_no1_trophy"></div> 
                    
                        <a href="album.php?id=<?php echo $billboardResult1[0]["AlbumID"]?>"><img src="libraries/timthumb.php?src=<?php echo noImage($billboardResult1[0]["AlbumPic"]); ?>&w=130&h=132&a=t" title="<?php echo $billboardResult1[0]["Album"]; ?>"></a><br />                            
                        <h4 class="p0 center text-2"><a href="album.php?id=<?php echo $billboardResult1[0]["AlbumID"]?>" class="tipme-left" rel="get_album" data="<?php echo $billboardResult1[0]["Song"]; ?>" id="<?php echo $billboardResult1[0]["AlbumID"]; ?>"><?php echo shorten($billboardResult1[0]["Song"],17);?></a></h4>
                        <p class="p0 center text-2"><a href="celebrity.php?id=<?php echo $billboardResult1[0]["CelebrityID"]; ?>" class="tipme-left" rel="get_celebrity" data="<?php echo $billboardResult1[0]["Singer"]; ?>" id="<?php echo $billboardResult1[0]["CelebrityID"]; ?>"><?php echo shorten($billboardResult1[0]["Singer"],16); ?></a></p>                    
                    
                    </div>
                    
                    <div class="billboard_2to5">
                    
                        <ul>
                        
                            <?php $i = 1; do { ?>  
                            
                            <li>      

                                <div class="extra-wrap">
                                    <div class="text-rank"><?php echo $i+1; ?></div>
                                    <h4 class="p0 text-2-2"><a href="album.php?id=<?php echo $billboardResult1[$i]["AlbumID"]?>" class="tipme-left" rel="get_album" data="<?php echo $billboardResult1[$i]["Song"]; ?>" id="<?php echo $billboardResult1[$i]["AlbumID"]; ?>"><?php echo shorten($billboardResult1[$i]["Song"],23);?></a></h4>
                                    <p class="p0 text-2-2"><a href="celebrity.php?id=<?php echo $billboardResult1[$i]["CelebrityID"]; ?>" class="tipme-left" rel="get_celebrity" data="<?php echo $billboardResult1[$i]["Singer"]; ?>" id="<?php echo $billboardResult1[$i]["CelebrityID"]; ?>"><?php echo shorten($billboardResult1[$i]["Singer"],23); ?></a></p>
                                </div>
                            </li>
                           <?php  $i++; } while($i < 5)?> 
                        </ul>
                    </div>
                    <br style="clear:both" />
                    <div class="clearfix"></div>
      

        </div>

        <div class="right_contents" id="bday_celeb_wrapper">

        <div id="tabs5">

            <ul>

                <li><a href="#memo-birthday">本週生日</a></li>

                <li><a href="#memo-passedday">本週懷念</a></li>

            </ul>
  
            <div id="memo-birthday"> <!-- 本週生日 --> 
  
            <?php        
                $bday=$DBConn->prepare("SELECT CelebrityID, Name, Pic, birthday FROM tblcelebrity 
                                        WHERE WEEKOFYEAR( concat(Year(Now()),substr(birthday,5)) ) = WEEKOFYEAR( NOW( ) ) ORDER BY birthday ASC 
                                        ");
                $bday->execute();
                $bdayResult=$bday->fetch(PDO::FETCH_ASSOC);
                $total_bday = $bday->rowCount();
             ?>    
            
            <?php if($total_bday < 1) { ?>
            
            <div class="no_memo">本週沒有藝人生日..</div>
            
            <?php } else { ?>
            
            <ul id="bday_celeb" class="carousel_right">

                 <?php $i = 0; do { ?>        
                <li>

                    <div class="thumbnail_box"><a href="celebrity.php?id=<?php echo $bdayResult["CelebrityID"]; ?>"><img src="libraries/timthumb.php?src=/<?php echo $bdayResult["Pic"]; ?>&w=100&h=100&a=t" title="<?php echo $bdayResult["Name"]; ?>"></a></div>

                    <h6 class="singer center" style="word-wrap:break-word;"><a href="celebrity.php?id=<?php echo $bdayResult["CelebrityID"]; ?>" class="tipme-left" rel="get_celebrity" data="<?php echo $bdayResult["Name"];?>" id="<?php echo $bdayResult["CelebrityID"] ;?>"><?php echo shorten($bdayResult["Name"], 12);?></a></h6>
                    
                    <h6 class="text-4 center"><?php echo birthdate($bdayResult["birthday"]);?></h6>                             

                </li>
                <?php $i++; } while($bdayResult=$bday->fetch(PDO::FETCH_ASSOC))?>

                </ul>
                <div class="clearfix"></div>
                
                <?php if($total_bday > 3) { ?>              
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="bday_celeb_prev" href="#"><span>prev</span></a>
                        <a class="next" id="bday_celeb_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_bday_celeb" class="pagination_wrapper"></div>
                </div>
                <?php } ?>          
                <?php } ?>
                
                <br style="clear:both" />
                
              </div>
              
              <div id="memo-passedday"> <!-- 本週懷念 -->
 
            <?php        
                $pday=$DBConn->prepare("SELECT CelebrityID, Name, Pic, passday FROM tblcelebrity 
                                        WHERE WEEKOFYEAR( concat(Year(Now()),substr(passday,5)) ) = WEEKOFYEAR( NOW( ) ) 
                                        ORDER BY passday ASC");
                $pday->execute();
                $pdayResult=$pday->fetch(PDO::FETCH_ASSOC);
                $total_pday = $pday->rowCount();
             ?>    
            
            <?php if($total_pday < 1) { ?>
            
            <div class="no_memo">本週無任何相關紀念日..</div>
            
            <?php } else { ?>
            
            <ul id="pday_celeb" class="carousel_right">

                 <?php $i = 0; do { ?>        
                <li>

                    <div class="thumbnail_box"><a href="celebrity.php?id=<?php echo $pdayResult["CelebrityID"]; ?>"><img src="libraries/timthumb.php?src=/<?php echo $pdayResult["Pic"]; ?>&w=100&h=100&a=t" title="<?php echo $pdayResult["Name"]; ?>"></a></div>

                    <h6 class="singer"><a href="celebrity.php?id=<?php echo $pdayResult["CelebrityID"]; ?>" class="tipme-left" rel="get_celebrity" data="<?php echo $pdayResult["Name"];?>" id="<?php echo $pdayResult["CelebrityID"] ;?>"><?php echo shorten($pdayResult["Name"], 50);?></a></h6>
                    
                    <h6 class="text-4"><?php echo birthdate($pdayResult["passday"]);?></h6>                             

                </li>
                <?php $i++; } while($pdayResult=$pday->fetch(PDO::FETCH_ASSOC))?>

                </ul>
                <div class="clearfix"></div>
                
                <?php if($total_pday > 3) { ?>
                <div class="pager_nav">
                    <div class="pn_wrapper">
                        <a class="prev" id="pday_celeb_prev" href="#"><span>prev</span></a>
                        <a class="next" id="pday_celeb_next" href="#"><span>next</span></a>
                    </div>
                    <div id="pager_pday_celeb" class="pagination_wrapper"></div>
                </div>
              <?php } ?>
              <?php } ?>
              
              <br style="clear:both" />
              
            </div>
            
          </div>

        </div>          
    
        <div class="right_contents" id="FB_plugin">
        
        <div class="fb-like-box" data-href="https://www.facebook.com/pages/PlayMusic%E9%9F%B3%E6%A8%82%E7%B6%B2%E7%B2%89%E7%B5%B2%E5%9C%98/110125352352918" data-width="385" data-show-faces="true" data-stream="false" data-border-color="#d8d8d8" data-header="false"></div>
        
        </div>   
        
        <div class="right_contents" id="partners">
        
        <div class="title"><a href="partners.php">合作夥伴</a></div>
               
        <?php       
            $Partners=$DBConn->prepare("SELECT ADLink, Note, AdPicture FROM tblrowad WHERE ADType = :type ORDER BY Rand() LIMIT 10");
            $Partners->bindValue(':type','合作單位',PDO::PARAM_STR);
            $Partners->execute();
            $PartnersResults=$Partners->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($PartnersResults as $partner) {
        ?>
        
        <a href="<?php echo $partner['ADLink'] ?>" target="_blank"><img src="libraries/timthumb.php?src=/<?php echo $partner['AdPicture'] ?>&w=62" title="<?php echo $partner['Note'] ?>" width="62" height="40"/></a>
        
        <?php } ?>      
        
    </div>         


    </div><!--right_column END-->

</div><!--right_container END-->

<br style="clear:both" />


<script type="text/javascript">

$(document).ready( function() {

　　var $aaa = $('.aaa').toArray();
　　var size = $aaa.length;
　　//將 aaa 類別的元素讀成陣列，並計算總共有幾個元素要被輪播
　　var i = 0;
　　delayedUpdatelist(i);
　　//初始輪播效果，從第 0 個元素開始播，輪播效果的 function 在下面

　　function delayedUpdatelist(x) {

　　　if(x <= size){ 
　　　　$('.aaa:eq('+x+')').show("show").delay(5000).fadeOut("show");
　　　　//指定要被輪播的元素還沒大於要被播放的總數時，
　　　　//就 show 出元素，停留 7 秒，然後 fadeOut
　　　　//這裡的播放效果可以改自己想要的，fadeIn、fadeOut、show…anything！
　　　　setTimeout(function(){ delayedUpdatelist(x+1) }, 6000);
　　　　//用 setTimeout 讓程式在這裡暫停一下，等一個播完再呼叫 function 去播下一個
　　　　//不然會造成上一個元素還在 delay 的時候下一個元素就跟著跑出來了

　　　} else {

　　　　x = 0;
　　　　$('.aaa:eq('+x+')').show("show").delay(5000).fadeOut("show");
　　　　setTimeout(function(){ delayedUpdatelist(x+1) }, 6000);
　　　　//若指定要被輪播的元素已大於被輪播的總數，就將 x 設為 0，重頭播放第 0 個元素。

　　　}

　　}


    /*--carousel --*/   
    $('.carousel').each(function() {
    var divid = $(this).attr('id');
        
     $('#'+divid).carouFredSel({
        width:575,
        auto: false,
        align: false,
        circular: false,
        pagination: "#pager_"+divid,
        prev  : { 
          button  : "#"+divid+"_prev",
          key   : "left"
        },
        next  : { 
          button  : "#"+divid+"_next",
          key   : "right"
        }
    });
    })
    
    $('.carousel_right').each(function() {
    var divid = $(this).attr('id');
        
     $('#'+divid).carouFredSel({
        width:380,
        auto: false,
        align: false,
        circular: false,
        pagination: "#pager_"+divid,
        prev  : { 
          button  : "#"+divid+"_prev",
          key   : "left"
        },
        next  : { 
          button  : "#"+divid+"_next",
          key   : "right"
        }
    });
    })  
    

    $('#media_carousel_chinese').youtube({
            thumbSize   : 'large',    // 設定要取得的縮圖是大圖還是小圖//大圖寬高為 480X360；小圖寬高為 120X90
            swfWidth    : '365',     // 指定 YouTube 影片的寬
            swfHeight   : '250',      // 指定 YouTube 影片的高
            autoPlay    : '?autoplay=0', // 是否載入 YouTube 影片後自動播放；若不要自動播放則設成 0
            fullScreen  : '&fs=1',
            videoTarget : '#video_box_chinese',
    });

    $('#media_carousel_western').youtube({
            thumbSize   : 'large',    // 設定要取得的縮圖是大圖還是小圖//大圖寬高為 480X360；小圖寬高為 120X90
            swfWidth    : '365',     // 指定 YouTube 影片的寬
            swfHeight   : '250',      // 指定 YouTube 影片的高
            autoPlay    : '?autoplay=0', // 是否載入 YouTube 影片後自動播放；若不要自動播放則設成 0
            fullScreen  : '&fs=1',
            videoTarget : '#video_box_western',
    });

    $('#media_carousel_jk').youtube({
            thumbSize   : 'large',    // 設定要取得的縮圖是大圖還是小圖//大圖寬高為 480X360；小圖寬高為 120X90
            swfWidth    : '365',     // 指定 YouTube 影片的寬
            swfHeight   : '250',      // 指定 YouTube 影片的高
            autoPlay    : '?autoplay=0', // 是否載入 YouTube 影片後自動播放；若不要自動播放則設成 0
            fullScreen  : '&fs=1',
            videoTarget : '#video_box_jk',
    });



    $("#tabs, #tabs1, #tabs2, #tabs3, #tabs4, #tabs5").tabs({

        event: "click"

    });


$('.shorten').readmore({ substr_len: 14 });

$(".tipme-right").each(function() {
    var ajaxURL = $(this).attr('rel');
    var ID = $(this).attr('id');
    var title = $(this).attr('data');
    
    $(this).qtip({
        content: {
            text: 'Loading...', // The text to use whilst the AJAX request is loading
            ajax: {
                url: 'ajax/'+ajaxURL+'.php', // URL to the local file
                type: 'POST', // POST or GET
                data: { id: ID } // Data to pass along with your request
            },
            title: {
                    text: title // Give the tooltip a title using each elements text
                    }
        },
        hide: {
            event: 'mouseleave'
        },      
        style: {
            classes: 'qtip-shadow qtip-rounded'
        },
        show: {
            solo: true // Only show one tooltip at a time
        },
        position: {
            my: 'left center', 
            at: 'right center'
        }
    });
})

$(".tipme-left").each(function() {
    var ajaxURL = $(this).attr('rel');
    var ID = $(this).attr('id');
    var title = $(this).attr('data');
    
    $(this).qtip({
        content: {
            text: 'Loading...', // The text to use whilst the AJAX request is loading
            ajax: {
                url: 'ajax/'+ajaxURL+'.php', // URL to the local file
                type: 'POST', // POST or GET
                data: { id: ID } // Data to pass along with your request
            },
            title: {
                    text: title // Give the tooltip a title using each elements text
                    }
        },      
        style: {
            classes: 'qtip-shadow qtip-rounded'
        },
        show: {
            solo: true // Only show one tooltip at a time
        },
        position: {
            my: 'right center', 
            at: 'left center'
        }
    });
})

$('.mask').each(function() {
    $(this).hover(
    function(e) { $(this).parent().children('.album_name').stop(true, true).slideDown(400); e.stopImmediatePropagation();},
    function(e) { $(this).parent().children('.album_name').stop(true, true).slideUp(400); e.stopImmediatePropagation();}
    )
})

$('.billboard_2to5 ul li:odd').css('background-color','#FAFAFA');

})
</script>  

<?php 
require_once("templates/footer.php");      

?> 



