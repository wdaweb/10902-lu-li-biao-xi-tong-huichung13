<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/2d0f11d24e.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="../plugins/style.css"> -->
  <link rel="stylesheet" href="./plugins/style.css">
</head>

<body>
<?php
include_once "base.php";
$table=$do;
$autob=new DB('autob');
$aa=$autob->find(1);

?>
<div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position: fixed;top: 200px;left:300px; width:50%; height:40%; margin:auto; z-index:9898;background:white;"></div>
        </div>
    </div>
  <div class="resume">
    <div class="base">
      <div class="profile">
        <div class="photo"><a href="resume.php" title="index">
            <img src="frog.jpg" /></a>
          <!-- <i class="fas fa-rocket"></i> -->
        </div>
        <div class="info">
          <h1 class="name">Chung, Joyce</h1>
          <h2 class="job">Backend\ Frontend Web programmer</h2>
        </div>
      </div>
      <div class="about">
      <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/news.php?table=<?=$table;?>&#39;)"
                            value="新增最新消息資料">
            <h3>更換自傳</h3>
            <textarea name="text[]" style='width:90%;height:50px'><?=$aa['text'];?></textarea>
          </div>
      <div class="contact">
        <h3>Contact Me</h3>
        <div class="call"><a href="tel:123-456-7890"><i class="fas fa-phone"></i><span>123-456-7890</span></a></div>
        <div class="address"><a href="https://goo.gl/maps/fiTBGT6Vnhy"><i class="fas fa-map-marker"></i><span>Taipei,
              Taiwan</span></a>
        </div>
        <div class="email"><a href="mailto:frog@gmail.com"><i class="fas fa-envelope"></i><span>frogC</span></a></div>
        <div class="website"><a href="http://frog.com/" target="_blank"> <i
              class="fas fa-home"></i><span>frogC.com</span></a></div>
      </div>
      <div class="follow">
        <h3>Follow Me</h3>
        <div class="box">
          <a href="https://www.facebook.com/#/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/#/" target="_blank"><i class="fab fa-instagram "></i></a>
          <!-- <a href="https://www.pinterest.com/#/" target="_blank"><i class="fab fa-pinterest"></i></a> -->
          <a href="https://www.linkedin.com/#/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://codepen.io/#/" target="_blank"><i class="fab fa-codepen"></i></a>
          <!-- <a href="https://www.behance.net/#" target="_blank"><i class="fab fa-behance"></i></a> -->
        </div>
      </div>
    </div>
    <div class="func">
      <div class="work">
        <h3><i class="fa fa-briefcase"></i>Experience</h3>
        <ul>
          <li><span>MIS </span><small>ZZ</small><small>Apr 2011 - Mar 2019</small></li>
          <li><span>Assistant</span><small>TT</small><small>Jan 2007 - Apr 2008</small></li>
          <!-- <li><span>Intern - Web Design</span><small>Lynden</small><small>Aug 2017 - Dec 2017</small></li> -->
        </ul>
      </div>
      <div class="edu">
        <h3><i class="fa fa-graduation-cap"></i>Education</h3>
        <ul>
          <li><p>Bachelor of MIS<br>(Management Information System)</p><small>SHU</small><small>Jan. 2001 -
              Apr. 2004</small></li>
          <!-- <li><span>Computer Science</span><small>Edmonds Community College</small><small>Sept. 2014 - Dec. 2015</small>
          </li>
          <li><span>High School</span><small>Henry M. Jackson High School</small><small>Jan. 2013 - Jun. 2015</small>
          </li> -->
        </ul>
      </div>
      <div class="skills-prog">
        <h3><i class="fas fa-code"></i>Programming Skills</h3>
        <ul>
          <li data-percent="95"><span>HTML5 & CSS</span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li>
          <!-- <li data-percent="90"><span>CSS </span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li> -->
          <li data-percent="60"><span>JavaScript</span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li>
          <li data-percent="50"><span>jQuery</span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li>
          <!-- <li data-percent="40"><span>JSON</span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li> -->
          <li data-percent="55"><span>PHP</span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li>
          <li data-percent="40"><span>MySQL</span>
            <div class="skills-bar">
              <div class="bar"></div>
            </div>
          </li>
        </ul>
      </div>
      <div class="skills-soft">
        <h3><i class="fas fa-bezier-curve"></i>Software Skills</h3>
        <ul>
          <li data-percent="60">
            <svg viewbox="0 0 100 100">
              <circle cx="50" cy="50" r="45"></circle>
              <circle class="cbar" cx="50" cy="50" r="45"></circle>
            </svg><span>Illustrator</span><small></small>
          </li>
          <li data-percent="75">
            <svg viewbox="0 0 100 100">
              <circle cx="50" cy="50" r="45"></circle>
              <circle class="cbar" cx="50" cy="50" r="45"></circle>
            </svg><span>Photoshop</span><small></small>
          </li>
          <!-- <li data-percent="85">
                <svg viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45"></circle>
                  <circle class="cbar" cx="50" cy="50" r="45"></circle>
                </svg><span>InDesign</span><small></small>
              </li> -->
          <li data-percent="65">
            <svg viewbox="0 0 100 100">
              <circle cx="50" cy="50" r="45"></circle>
              <circle class="cbar" cx="50" cy="50" r="45"></circle>
            </svg><span>Dreamweaver</span><small></small>
          </li>
        </ul>
      </div>
      <div class="interests">
        <h3><i class="fas fa-star"></i>Portfolio</h3>
        <div class="interests-items">
          <div class="art"><img src="./img/calendar.PNG" alt="" width="80px"><span>Calendar</span></div>
          <div class="art"><img src="./img/invoice.PNG" alt="" width="80px"><span>Invoice mang</span></div>
          <div class="movies"><img src="./img/countdown.PNG" alt="" width="80px"><span>Countdown</span></div>

        </div>
      </div>
    </div>

  </div>
  </div>
  <div id="logout"
    style="width: 80px; height: 80px; background: #BF0426; border-radius: 50%;position: fixed; bottom:0;right:0;">
    <!-- <div id="login" style="width: 80px; height: 80px; background: #BF0426; border-radius: 50%;position: relative;float:right;"> -->
    <!-- <div id="login" class="position-fixed" style="width: 50px; height: 50px; background: red; border-radius: 50%;"> -->
    <a href="resume.php" style="color: white; padding-top: 30px; padding-left:10px;">Logout</a>
  </div>
  <script>
    (function () {
      $(".skills-prog li")
        .find(".skills-bar")
        .each(function (i) {
          $(this)
            .find(".bar")
            .delay(i * 150)
            .animate(
              {
                width:
                  $(this)
                    .parents()
                    .attr("data-percent") + "%"
              },
              1000,
              "linear",
              function () {
                return $(this).css({
                  "transition-duration": ".5s"
                });
              }
            );
        });

      $(".skills-soft li")
        .find("svg")
        .each(function (i) {
          var c, cbar, circle, percent, r;
          circle = $(this).children(".cbar");
          r = circle.attr("r");
          c = Math.PI * (r * 2);
          percent = $(this)
            .parent()
            .data("percent");
          cbar = (100 - percent) / 100 * c;
          circle.css({
            "stroke-dashoffset": c,
            "stroke-dasharray": c
          });
          circle.delay(i * 150).animate(
            {
              strokeDashoffset: cbar
            },
            1000,
            "linear",
            function () {
              return circle.css({
                "transition-duration": ".3s"
              });
            }
          );
          $(this)
            .siblings("small")
            .prop("Counter", 0)
            .delay(i * 150)
            .animate(
              {
                Counter: percent
              },
              {
                duration: 1000,
                step: function (now) {
                  return $(this).text(Math.ceil(now) + "%");
                }
              }
            );
        });
    }.call(this));

    function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}


function cl(x)
{
	$(x).fadeOut();
}

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixhQUExQixDQUF3QyxDQUFDLElBQXpDLENBQThDLFFBQUEsQ0FBQyxDQUFELENBQUE7SUFDNUMsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLElBQVIsQ0FBYSxNQUFiLENBQW9CLENBQUMsS0FBckIsQ0FBMkIsQ0FBQSxHQUFFLEdBQTdCLENBQWlDLENBQUMsT0FBbEMsQ0FBMEM7TUFDeEMsS0FBQSxFQUFPLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxPQUFSLENBQUEsQ0FBaUIsQ0FBQyxJQUFsQixDQUF1QixjQUF2QixDQUFBLEdBQXlDO0lBRFIsQ0FBMUMsRUFFRyxJQUZILEVBRVMsUUFGVCxFQUVtQixRQUFBLENBQUEsQ0FBQTthQUNqQixDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsR0FBUixDQUFZO1FBQUEscUJBQUEsRUFBdUI7TUFBdkIsQ0FBWjtJQURpQixDQUZuQjtFQUQ0QyxDQUE5Qzs7RUFNQSxDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixLQUExQixDQUFnQyxDQUFDLElBQWpDLENBQXNDLFFBQUEsQ0FBQyxDQUFELENBQUE7QUFDcEMsUUFBQSxDQUFBLEVBQUEsSUFBQSxFQUFBLE1BQUEsRUFBQSxPQUFBLEVBQUE7SUFBQSxNQUFBLEdBQVMsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakI7SUFDVCxDQUFBLEdBQUksTUFBTSxDQUFDLElBQVAsQ0FBWSxHQUFaO0lBQ0osQ0FBQSxHQUFJLElBQUksQ0FBQyxFQUFMLEdBQVUsQ0FBQyxDQUFBLEdBQUksQ0FBTDtJQUNkLE9BQUEsR0FBVSxDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsTUFBUixDQUFBLENBQWdCLENBQUMsSUFBakIsQ0FBc0IsU0FBdEI7SUFDVixJQUFBLEdBQU8sQ0FBQyxDQUFDLEdBQUEsR0FBSSxPQUFMLENBQUEsR0FBYyxHQUFmLENBQUEsR0FBc0I7SUFDN0IsTUFBTSxDQUFDLEdBQVAsQ0FBVztNQUFBLG1CQUFBLEVBQXFCLENBQXJCO01BQXdCLGtCQUFBLEVBQW9CO0lBQTVDLENBQVg7SUFDQSxNQUFNLENBQUMsS0FBUCxDQUFhLENBQUEsR0FBRSxHQUFmLENBQW1CLENBQUMsT0FBcEIsQ0FBNEI7TUFDMUIsZ0JBQUEsRUFBa0I7SUFEUSxDQUE1QixFQUVHLElBRkgsRUFFUyxRQUZULEVBRW1CLFFBQUEsQ0FBQSxDQUFBO2FBQ2pCLE1BQU0sQ0FBQyxHQUFQLENBQVc7UUFBQSxxQkFBQSxFQUF1QjtNQUF2QixDQUFYO0lBRGlCLENBRm5CO0lBSUEsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakIsQ0FBeUIsQ0FBQyxJQUExQixDQUErQixTQUEvQixFQUEwQyxDQUExQyxDQUE0QyxDQUFDLEtBQTdDLENBQW1ELENBQUEsR0FBRSxHQUFyRCxDQUF5RCxDQUFDLE9BQTFELENBQWtFO01BQ2hFLE9BQUEsRUFBUztJQUR1RCxDQUFsRSxFQUVHO01BQUEsUUFBQSxFQUFVLElBQVY7TUFBZ0IsSUFBQSxFQUFNLFFBQUEsQ0FBQyxHQUFELENBQUE7ZUFDdkIsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLElBQVIsQ0FBYSxJQUFJLENBQUMsSUFBTCxDQUFVLEdBQVYsQ0FBQSxHQUFpQixHQUE5QjtNQUR1QjtJQUF0QixDQUZIO0VBWG9DLENBQXRDO0FBTkEiLCJzb3VyY2VzQ29udGVudCI6WyIkKCcuc2tpbGxzLXByb2cgbGknKS5maW5kKCcuc2tpbGxzLWJhcicpLmVhY2ggKGkpIC0+XG4gICQodGhpcykuZmluZCgnLmJhcicpLmRlbGF5KGkqMTUwKS5hbmltYXRlIHtcbiAgICB3aWR0aDogJCh0aGlzKS5wYXJlbnRzKCkuYXR0cignZGF0YS1wZXJjZW50JykgKyAnJSdcbiAgfSwgMTAwMCwgJ2xpbmVhcicsIC0+XG4gICAgJCh0aGlzKS5jc3MgJ3RyYW5zaXRpb24tZHVyYXRpb24nOiAnLjVzJ1xuICByZXR1cm5cbiQoJy5za2lsbHMtc29mdCBsaScpLmZpbmQoJ3N2ZycpLmVhY2ggKGkpIC0+XG4gIGNpcmNsZSA9ICQodGhpcykuY2hpbGRyZW4oJy5jYmFyJylcbiAgciA9IGNpcmNsZS5hdHRyKCdyJylcbiAgYyA9IE1hdGguUEkgKiAociAqIDIpXG4gIHBlcmNlbnQgPSAkKHRoaXMpLnBhcmVudCgpLmRhdGEgJ3BlcmNlbnQnXG4gIGNiYXIgPSAoKDEwMC1wZXJjZW50KS8xMDApICogY1xuICBjaXJjbGUuY3NzICdzdHJva2UtZGFzaG9mZnNldCc6IGMsICdzdHJva2UtZGFzaGFycmF5JzogY1xuICBjaXJjbGUuZGVsYXkoaSoxNTApLmFuaW1hdGUge1xuICAgIHN0cm9rZURhc2hvZmZzZXQ6IGNiYXJcbiAgfSwgMTAwMCwgJ2xpbmVhcicsIC0+XG4gICAgY2lyY2xlLmNzcyAndHJhbnNpdGlvbi1kdXJhdGlvbic6ICcuM3MnXG4gICQodGhpcykuc2libGluZ3MoJ3NtYWxsJykucHJvcCgnQ291bnRlcicsIDApLmRlbGF5KGkqMTUwKS5hbmltYXRlIHtcbiAgICBDb3VudGVyOiBwZXJjZW50XG4gIH0sIGR1cmF0aW9uOiAxMDAwLCBzdGVwOiAobm93KSAtPlxuICAgICQodGhpcykudGV4dCBNYXRoLmNlaWwobm93KSArICclJ1xuICByZXR1cm4iXX0=
//# sourceURL=coffeescript

  </script>
</body>

</html>