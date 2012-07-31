/* =Global Elements
-------------------------------------------------------------- */

body, input, textarea {
    font:12px Helvetica, Verdana, Arial, sans-serif;
    color: #458BBF;
    line-height:15px;
}
p, ul, ol, dd, pre {
    margin-bottom:15px;
}
pre, code {
	font:14px Monaco, monospace;
	line-height:22px;
}
blockquote {
    font-style:italic;
}
table {
    border:1px solid #ccc;
    border-width:1px 1px 0 1px;
    font-size:13px;
    line-height:18px;
    margin:0 0 22px 0;
    text-align:left;
}
caption {
    text-align:left;
}
tr {
    border-bottom:1px solid #ccc;
}
th, td {
    padding: .7em 1.25em;
}
hr {
    background-color:#ccc;
    border:0;
    height:1px;
    margin-bottom:20px;
}
.ie7 hr {
	background-color:transparent;
	color:#ccc;
}
a:link,
a:visited {
    color: #82939B;
    text-decoration:none;
}
a:visited {
/*   color:#743399;*/
}
a:active,
a:hover {
    color: #586369;
    text-decoration:none;
}


/* =Header
-------------------------------------------------------------- */

#header {
    z-index:2;
    height:135px;
    margin:0 auto;
    width:750px;
}
#branding {
    float:left;
    padding:0;
    margin: 10px 0 5px 0;
    width:170px;
    height:134px;
}

#MESTC-image{
}

/*#blog-title {
    display:none;
    font-family:Arial,sans-serif;
    font-size:34px;
    font-weight:bold;
    line-height:40px;
}
#blog-title a {
    color:#000;
    text-decoration:none;
}
#blog-title a:active,
#blog-title a:hover {
    color: #FF4B33;
}
#blog-description {
    display:none;
    color:#666;
    font-size:13px;
    font-style:italic;
}*/

/* =Primary Header Menu
-------------------------------------------------------------- */

.skip-link {
    display:none;
}

#access {
    border:none;
    height:32px;
    font-size:13px;
    overflow:visible;
    z-index:100;
    float:left;
    margin: 10px 0 5px 5px;
    width: 575px;
    height: 134px;
}

body #access{
    background: no-repeat url('http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/MESTCHomeHeader.png');
    position:relative;
}

body.home #access{
    background: no-repeat url('http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/MESTCHomeHeader.png');
    position:relative;
}

body.events #access{
    background: no-repeat url('http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/MESTCEventHeader.png');
    position:relative;
}

body.books-journals #access{
    background: no-repeat url('http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/MESTCBJHeader.png');
    position:relative;
}

body.single #access{
    background: no-repeat url('http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/MESTCHomeHeader.png');
    position:relative;
}

body.events-calendar #access{
    background: no-repeat url('http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/MESTCEventHeader.png');
    position:relative;
}


.menu ul{
    font-size:30px;
    letter-spacing:-.7px;
    font-weight:600;
    line-height:36px;
    margin-top:15px;
    margin-left:15px;
    padding:0;
    float:left;
}

.menu li{
    padding:0;
    list-style-type:none;
    }


.menu a {
    color: #aee0f9;
}

.menu a:hover, 
.menu a:active, 
.menu .current-menu-item a{
    color: #e4ebf2;
}    

/* =Second Header Menu
-------------------------------------------------------------- */
#secondary-header-menu{
    width:100px;
    height: 105px;
    margin-left:10px;
    position:absolute;
    right:0px;
    bottom:16px;   
    border-left: solid 1px #aee0f9;
}

#secondary-header-menu ul{
    padding:0px 0 0px 10px;
    font-size: 22px;
    font-weight:normal;
    color:#aee0f9;
    margin:15px 0 0 0;
    position:absolute;
    bottom:2px;
}

#secondary-header-menu li{
    padding-top:12px;
    list-style-type:none;
    color:#aee0f9;
}

#secondary-header-menu a{
    color:#aee0f9;
}

#secondary-header-menu a:active, 
#secondary-header-menu a:hover,
#secondary-header-menu .current-menu-item a{
    color:#e4ebf2;
}

/* =Content
-------------------------------------------------------------- */

#main {
    clear:both;
    margin-top:15px;
    padding:0px 0 10px 0;
    min-height:400px;
}

#content {
    margin: 0 0 0 175px;
}
.page-title {
    padding:0 0 10px 0;
}
.attachment .page-title {
    font-style:italic;
}

h1.page-title {
    font-size:22px;
    line-height:26px;
    margin-top:5px;
    font-weight:bold;    
    color:#CDD42A;
}

body.archive .post h2{
    font-size:20px;
}

.page-title a {
    color:#666;
    text-decoration:none;
}
.page-title a:active,
.page-title a:hover {
    color: #FF4B33;
}
.page-title span {
    font-style:italic;
}
.page-title .meta-nav {
    font-style:normal;
}
.hentry {
    padding:0;
}
.single .hentry {
    padding:0;
}
.home #content .sticky {
    border:1px solid #ccc;
    margin:0 0 66px 0;
    padding:22px 20px 0 20px;
}
.entry-title {
    font-size:22px;
    font-weight:bold;
    line-height:26px;
    padding:5px 0 7px 0;
    color: #CDD42A;
}
.entry-title a {
    color: #CDD42A;
}
.entry-title a:active,
.entry-title a:hover {
    color: #586369;
}
.entry-meta {
}
.entry-meta .author {
}
.entry-meta .n, .entry-meta .nickname {
}
.entry-meta a {
}
.entry-meta a:active,
.entry-meta a:hover {
}
.entry-meta abbr {
    border:none;
    cursor:text;
}
.entry-content {
    padding:10px 0 0 0;
}
.entry-content h1,
.entry-content h2 {
    font-family:Arial,sans-serif;
    font-size:19px;
    font-weight:bold;
    padding:28px 0 14px 0;
}
.entry-content h3 {
    font-size:17px;
    font-style:italic;
    padding:28px 0 14px 0;
}
.entry-content h4 {
    font-size:11px;
    font-family:Arial,sans-serif;
    font-weight:bold;
    text-transform:uppercase;
    letter-spacing:0.05em;
}
.entry-content table {
    margin-left:1px;
}
.entry-content embed {
    margin:0 0 22px 0;
}
.entry-utility {
    clear:both;
    padding-bottom:10px;
    margin:0 0 15px 0;
    border-bottom:1px solid #CCC
}
.entry-utility a {
    }
.entry-utility a:active,
.entry-utility a:hover { 
}
.page .edit-link {
	clear:both;
	display:block;
}
.page-link {
	clear:both;
    font-size:13px;
    font-weight:bold;
    line-height:18px;
    margin:0 0 22px 0;
    padding:22px 0 0 0;
    word-spacing:0.5em;
}
.page-link a {
    border:1px solid #ccc;
    color:#666;
    font-weight:normal;
    padding:0.5em 0.75em;
    text-decoration:none;
}
.page-link a:active,
.page-link a:hover {
    color: #FF4B33;
}
ul#links-page,
ul#archives-page {
    list-style:none;
    margin-left:0;
    overflow:hidden;
}
li.content-column {
    float:left;
    margin-right:20px;
    width:45%;
}
#author-info {
    margin:0 0 44px 0;
    overflow:hidden;
}
#author-info .avatar {
    float:left;
    margin:.3em 1em 0 0;
}

.page-template-template-page-fullwidth-php #content {
	margin: 0px;
}

/* =Attachments
-------------------------------------------------------------- */

.attachment-jpeg #container,
.attachment-png #container {
    width:100%;
}
.attachment-jpeg #content,
.attachment-png #content {
    width:930px;
}
.attachment-jpeg #comments,
.attachment-png #comments {
    width:540px;
    overflow:hidden;
}
.attachment-jpeg .main-aside,
.attachment-png .main-aside {
    display:none;    
}


/* =Navigation
-------------------------------------------------------------- */

.navigation {
    line-height:18px;
    margin:0px 0 22px 0;
    overflow:hidden;
}
.navigation a {
}
.navigation a:active,
.navigation a:hover {
}
.navigation .meta-nav {
}
.nav-previous {
	float: left;
	width:50%;
}
.nav-next {
	float: right;
	width:50%;
	text-align:right;
}
#nav-above,#nav-below {
	width: 100%;
}
#nav-above {
    display:none;
}
.paged #nav-above {
    display:block;
    padding:0 0 44px 0;
}


/* =Comments
-------------------------------------------------------------- */

#comments {
	clear:both;
    padding:5px 0 0 0;
}
#comments,
#comments input,
#comments textarea {
    font-size:13px;
    line-height:18px;
}
#comments code {
    font-size:12px;
    line-height:18px;
}
#comments h3 {
    font-family:Arial,sans-serif;
    font-size:15px;
    font-weight:bold;
    line-height:22px;
    padding:0 0 18px 0;
}
#comments-list {
    border:1px solid #ccc;
    border-bottom:none;
    margin:0 0 18px;
}
#comments-list h3 {
	padding-bottom: 0;
}
#comments-list,
#comments-list ul {
    list-style:none;
}
#comments-list ul,
#comments-list ol {
    padding-bottom: 18px;
}
#comments-list ul ul,
#comments-list ol ol,
#comments-list ul ul ul,
#comments-list ol ol ol {
    padding-bottom:0;
}
#comments-list .comment {
    background:#fafafa;
    border-bottom:1px solid #ccc;
    padding:18px 1.5em 0 1.5em;
    position:relative;
}
#comments-list li.alt {
    background:#fff;
}
#comments-list li.bypostauthor {
    background:#FFFFCC;
}
#comments-list ul .comment {
    border:1px solid #ccc;
    margin:0 0 18px 0;
}
#comments-list li .avatar {
    position:absolute;
    top:22px;
    left:1.5em;
    width:36px;
    height:36px;
}
#comments-list .comment-author {
    font-weight:bold;
    padding:9px 0 0 46px;
}
#comments-list .comment-meta {
    color:#666;
    font-size:11px;
    padding:0 0 9px 46px;
}
#comments-list .comment-meta a {
    color:#666;
    font-style:italic;
    text-decoration:none;
}
#comments-list .comment-meta a:active,
#comments-list .comment-meta a:hover {
    color: #FF4B33;
}
.comment-reply-link {
    font-size:11px;
    padding:0 0 18px 0;
    text-align:right;
}
.comment-reply-link a {
    color:#666;
    font-style:italic;
    text-decoration:none;
}
.comment-reply-link a:active,
.comment-reply-link a:hover {
    color: #FF4B33;
}
.comment-navigation {
    font-weight:bold;
	padding: 18px 0 24px;
    margin-right:0.5em;
}
.comment-navigation a {
    border:1px solid #ccc;
    color:#666;
    font-weight:normal;
    padding:0.5em 0.75em;
    text-decoration:none;
}
.comment-navigation a:active,
.comment-navigation a:hover {
    color: #FF4B33;
}
.comment-navigation a,
.comment-navigation span {
    margin-right:0.5em;
}
#trackbacks-list .comment-content {
    position:absolute;
    left:-10000px;
}
#respond {
    background:#fff;
    margin-bottom:22px;
    overflow:hidden;
    padding:18px 0 0 0;
    position:relative;
}
#comments-list #respond {
    border-bottom:1px solid #ccc;
    margin:0 0 18px 0;
    padding:18px 1.5em;
}
#comments-list ul #respond {
    border:1px solid #ccc;
    margin:0;
}
#cancel-comment-reply {
    font-size:11px;
    position:absolute;
    top:18px;
    right:1.5em;
}
#cancel-comment-reply a {
    color:#666;
}
#respond .required {
    color:#FF4B33;
    font-weight:bold;
}
.form-section label {
    font-size:11px;
}
.form-section input {
    margin:0 0 18px 0;
    width:98%;
}
.form-section textarea {
    width:99%;
}
#form-allowed-tags p {
    color:#666;
    font-size:11px;
    margin:0;    
}
#form-allowed-tags span {
    font-style:italic;
}
#form-allowed-tags code {
    font-size:11px;
    line-height:normal;
}
.form-submit {
    padding:18px 0 0 0;
    text-align:right;
}
.subscribe-to-comments {
    color:#666;
    float:left;
    font-size:11px;
    margin:0;
    padding:18px 0 0 0;
}
.solo-subscribe-to-comments {
    color:#666;
    font-size:11px;
    padding:18px 0 0 0;
}
.comment_license {
    color:#666;
    clear:both;
    font-size:11px;
    margin:0;
    padding:18px 0 0 0;
}


/* =Asides, Sidebars & Widget-Ready Areas
-------------------------------------------------------------- */

.aside,
.aside input {
    font-size:13px;
    line-height:18px;
    margin-bottom:6px;
}
.aside p,
.aside ul,
.aside ol,
.aside dd,
.aside pre {
    margin-bottom:18px;
}
.aside pre,
.aside code {
    font-size:12px;
    line-height:18px;
}
.aside .current-menu-item a,
.aside .current_page_item a {
    color: #FF4B33;
}
.aside .current-menu-item .menu-item a,
.aside .current_page_item .menu-item a {
    color:#666;
}
.aside .current-menu-item .menu-item a:hover,
.aside .current-menu-item .menu-item a:active,
.aside .current_page_item .menu-item a:hover,
.aside .current_page_item .menu-item a:active {
    color: #FF4B33;
}
.aside {
    color:#666;
}

.aside h3 {
    font-size:15px;
    font-style:italic;
    line-height:22px;
}
.aside h3 a {
    text-decoration:none;
}
.aside caption {
    font-size:11px;
    font-family:Arial,sans-serif;
    font-weight:bold;
    text-transform:uppercase;
    letter-spacing:0.05em;
}
.aside ul {
    list-style:none;
    margin-left:0;
    padding-left: 0;
}

.aside ul ul {
    list-style:disc;
    margin:0 0 22px 20px;
}
.aside ul ul li {
    padding:1px 0;
}
.aside ul ul ul {
    margin-bottom:0;
}
.aside form,
.aside table {
    margin-bottom:15px;
}
.aside table {
    border:none;
}
.aside thead {
    border:1px solid #ccc;
}
.aside tbody {
    border:1px solid #ccc;
}
.aside th, .aside td {
    border-right:1px solid #ccc;
    padding:.25em .8em;
}
.aside tfoot tr {
    border:none;
}
.aside tfoot td {
    border-color:transparent;
}
.widget_tag_cloud {
    margin:0 0 22px 0;
}
.aside #searchsubmit {
	display: none;	
}
/*
    Main Asides
*/
.main-aside ul {
    line-height: 14px;
}
.main-aside h3 {
}
.main-aside ul ul {
    padding:0;
}

/* =Custom Aside Adjustments
-------------------------------------------------------------- */

#primary, #secondary {
    color:#82939B;
    margin: 20px 0 0 0px;
    font-size: 11px;
    line-height: 14px;
    width:155px;
}

#primary p, #secondary p{
    margin-bottom:3px;
    padding:0;
}

#primary a, #secondary a{
    color:#82939B;
}

#primary a:hover, #secondary a:hover{
    color:#586369;
}

#primary h1, #secondary h1{
    font-size: 11px;
    font-weight:bold;
    line-height: 12px;
    color: #6CB2D4;
    margin: 0px 0 5px 0;
}

#primary.aside{
    margin-top:7px;
}

#primary.aside ul{
    margin-bottom:0px;
}

#primary.aside #mailinglist{
    width:115px;
    padding: 5px 0;
    border-top:1px solid #82939B;
    border-bottom:1px solid #82939B;
    font-size:16px;
    letter-spacing:-.5px;
    text-align:center;
}

#secondary.aside li {
    padding-bottom:20px;
}

.aside .widgettitle {
    visibility:hidden;
    height:0px;}

.aside input{
    margin-top:0px;
    width:150px;
    background-color:#DADADA;
    border:1px solid #82939B;
    color:#2D2D2D;
    font-size:11px;
    height:18px;
    padding-left:4px;
  }

#secondary.aside ul.xoxo ul li{
    padding-bottom:0;
    margin:0;
}

#secondary.aside ul ul{
    margin-left:14px;
}

/*
    Share This Styles
-------------------------------------------------------------- */

#primary #st_group, #secondary #st_group {
    display:none;
}

#tribe-events-loop #st_group span.stButton{
    margin-left: 2px;
}

/*
    Content Asides
-------------------------------------------------------------- */

#content .aside {
    border:1px solid #ccc;
    margin:0 0 22px 0;
    padding:18px 0 0 0;
}
#content .aside ul {
    padding:0 20px;
}
#content .aside h3 {
    font-weight:normal;
    font-size:17px;
    padding:0 0 7px 0;
    text-transform:none;
}
#content .aside ul ul {
    padding:0;
}
/*
    Footer Asides
*/
#subsidiary {
    padding:33px 0 0 0;    
}


/* =Footer
-------------------------------------------------------------- */

#footer {
    width:750px;
    border-top:1px solid #ccc;
    margin:0 auto;
}
#siteinfo {	
    font-family: Helvetica, Verdana, Arial, sans-serif;
    font-size: 9.5px;
    color: #82939B;
    letter-spacing: 0.3px;
    line-height: 24px;
    text-align:center;
}

#siteinfo a{
	color: #82939B;
	text-decoration:none;
	}
	
#siteinfo a:hover{
	color: #586369;
	text-decoration:none;
	}

/* =Events Calendar Plugin Adjustments that Need to Live Here
-------------------------------------------------------------- */

/* Single Event Page*/
#tribe-events-event-meta{
        padding: 10px 0 0 0;
        margin: 5px 0 10px 0;
}

#tribe-events-event-meta .column {
    float:left;
    width:31%;
    padding:0 2% 0 0;
    text-align:left;
    margin:0;
}

#tribe-events-event-meta dt {
    width:50px;
    padding:0;
}

#tribe-events-event-meta dd {
    padding:0;
    margin-left:50px;
    margin-bottom: 10px;
}

#tribe-events-event-meta dd.category-meta {
    padding:0;
    margin-left:70px;
    margin-bottom: 10px;
}

.entry{
    border-bottom:1px solid #ccc;
    margin-bottom:10px;
    padding-bottom:0px;
}

.navlink{
    margin:0 5px 0 0;
    padding-bottom:0px;
}

.event-passed{
    width:519px;
    margin-bottom:12px;
}

/* List Page */

.tribe-events-event-entry .wp-post-image {
    max-width:200px;
    border:none;
    padding:0 0 10px 10px;
    margin:0;
}

/* Mailing List CSS
-------------------------------------------------------------- */
#mailinglist-table {
    border:none;
    width:500px;
}

#mailinglist-table td{
    margin:0;
    padding:0;
    width:100%;
}

#mailinglist-table tr{
    border:none;
}

#mailinglist-table input.mlinput{
    float:right;
    margin-right:200px;
    width:200px;
    height:16px;
}


#mailinglist-table textarea{
    width:500px;
    height:80px;
}

#mailinglist-table input.mlinput, 
#mailinglist-table textarea{
    padding: 3px 1px 0px 1px; 
    font-size: 12px; 
    color: #2d2d2d; 
    background-color: #dadada; 
    border: 1px solid #99ADB5;
}

#mailinglist-table input[type="radio"]{
    margin-left:0px;
} 

/* Books and Journals
-------------------------------------------------------------- */
#bookrotation{
    width:217px;
    padding-left:70px;
    margin-bottom:20px;
    float:left;
    text-align:center;
}

#journalrotation{
    width:217px;
    padding-right:70px;
    margin-bottom:20px;
    float:right;
    text-align:center;
}
  
#bookrotation img,
#journalrotation img,
#bookrotation pre,
#journalrotation pre{ 
    margin:0;
}

#bookrotation p,
#journalrotation p{
    margin:5px 0;
}

/* =Events
-------------------------------------------------------------- */
.us-theatre-text a, 
.international-text a, 
.conference-text a,
.publication-text a,
.screenings-text a{
    font-size: 20px;
    font-weight:bold;
}

.us-theatre-text a{ 
    color: #CDD42A;
}

.international-text a{
    color: #CB5795;
}

.publication-text a{ 
    color: #DA8712;
}

.conference-text a{
    color: #458BBF;
}

.screenings-text a{
    color:#22487F;
}

.us-theatre-text a:hover, 
.international-text a:hover, 
.conference-text a:hover,
.publication-text a:hover,
.screenings-text a:hover{
    color:#82939b;
}

body.pageid-21 #tribe-events-calendar-header{
    height:0px;
}

body.pageid-21 #tribe-events-calendar-header .tribe-events-calendar-buttons{
    top:0px;
}

body.pageid-21 #content div.event-block{
    height:145px;
    clear:both;
    padding: 0;
}


body.pageid-21 #content div.entry-content div.event-block div.alignleft,
body.pageid-21 #content div.entry-content div.event-block img.alignleft{
    padding:0;
    margin:0;
}

body.pageid-21 #content .event-block div.wp-caption img{
    border:none;
}

body.pageid-21 #content div.event{
    font-size:20px;
    font-weight:bold;
    line-height:22px;
    padding: 0px 0 2px 0;
}

/* =Index Styles
-------------------------------------------------------------- */

body.pageid-4{
    position:relative
    width:100%;
    background-color:#1C4980;
}

body.pageid-4 #bgpic{
	position:relative;
	min-width:850px;
	}

body.pageid-4 #caption{
	position:fixed;
	bottom:30px;
	right:0;
	}

body.pageid-4 #credits{
	/* min-width: 850px;*/
	position:fixed;
	bottom:5px;
	right:0;
	text-align:right;
	font-size:12px;
	font-family: Helvetica, Arial, sans-serif;
	font-style:italic;
	color:#FFFFFF;
	padding: 8px 15px 0 0;
	}

body.pageid-4 #header{
    position:absolute;
    top:0;
    left:0;
    float:left;
    height:175px;
    width:100%;
}

body.pageid-4 #branding{
    margin:0;
    height:175px;
    width: 225px;
}

body.pageid-4 #access{
    margin: 0; 
    background:none;
}

body.pageid-4 #access .menu ul{
    font-size:40px;
    line-height:48px;
    margin-top:18px;
    margin-left:18px;
}

body.pageid-4 #access .menu a{
    color:#e4ebf2;
}

body.pageid-4 #access .menu a:hover{
    color:#AEE0F9;
}

body.pageid-4 #index-top{
  margin-top:15px;
  padding-left:10px;
  width:300px; 
  height:138px;
  left:640px;
  position:absolute;
  z-index:5;
  border-left: 1px solid #ccc;
  color:#e4ebf2;
}

body.pageid-4 #index-top h3.widgettitle{
    visibility:visible;
    font: 16px Helvetica, Verdana, Arial, sans-serif;
    color:#e4ebf2;
    font-weight:bold;
    padding: 3px 0 3px;
    height:16px;
    text-align:left;
}

body.pageid-4 #index-top ul{
  margin:0;
  list-style-type:none;
}

body.pageid-4 #index-top .when{
  padding-top:2px;
  font-size:16px;
  padding-bottom:6px;
}

body.pageid-4 #index-top .event a{
  font-size:20px;
  font-weight:bold;
  line-height:20px;
  color: #CDD42A;
}

body.pageid-4 #index-top .event a:hover{
  text-decoration:none;
  color:#AEE0F9;
}

body.pageid-4 #index-top .dig-in a{
  position:absolute;
  color:#e4ebf2; 
  bottom:0px;
}

body.pageid-4 #index-top .dig-in a:hover{
    text-decoration:none;
    color:#AEE0F9;
}

body.pageid-4 #main,
body.pageid-4 #container,
body.pageid-4 #content,
body.pageid-4 #content .entry-content,
body.pageid-4 #content .entry-content img{
    margin:0;
    padding:0;
    width:100%
}

body.pageid-4 #main{
    position:absolute;
    top:0;
    left:0;
}

body.pageid-4 #st_group,
body.pageid-4 #siteinfo,
body.pageid-4 #visibility{
    display:none;
    margin:0;
    padding:0;
}

body.pageid-4 #footer{
    border:none;
}


/* =Home Styles
-------------------------------------------------------------- */
body.pageid-6 #content{
    margin: 5px 0 5px 0;
    width:100%
}

body.pageid-6 #content .aside ul{
    padding:0;
    margin:0;
}

body.pageid-6 #content h3.widgettitle{
    visibility:visible;
    font: 16px Helvetica, Verdana, Arial, sans-serif;
    color: #458BBF;
    font-weight:bold;
    padding:2px 0;
    height:16px;
    text-align:left;
}

body.pageid-6 #content .aside,
body.pageid-6 #page-top.aside{
    border:none;
    padding:0;
    margin:0;
}

body.pageid-6 #page-top.aside{
    height:300px;
    margin:0 0 15px 0;
}

body.pageid-6 .entry-content{
    font-size:120%;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    margin:8px 0;
}

body.pageid-6 #st_group{
    display:none;
}

body.pageid-6 #page-top #dfcg-widget{
    width:500px;
    float:left;
    margin:0 10px 0 0;
    padding:0;
}

body.pageid-6 #page-top #dfcg-widget h3{
    line-height:18px;
    font-style:normal;
}

#dfcg-widget img{
    max-width:100%
}

#dfcg-thumbnails a.dfcg-carouselBtn{
    visibility:hidden;
}


#page-top .eventsListWidget{
    float:left;
    width:240px;
    height:300px;
    position:relative;
}

#page-top li.eventsListWidget h3.widgettitle{
    font-size:20px;
    padding-bottom:5px;
}

#page-top .eventsListWidget ul{
    list-style-type:none;
}

#page-top .eventsListWidget ul.upcoming li{
    padding-bottom:3px !important;
}

#page-top .eventsListWidget ul .when{
    font-size:11px;
    color: #458BBF;
}

#page-top .eventsListWidget ul .event{
    font-size:13px;
    font-weight:bold;
}

#page-top .eventsListWidget .dig-in{
    font-size:12px;
    position:absolute;
    bottom:0px;
}

#page-top .eventsListWidget .dig-in a{
    text-decoration:none;
    font-weight:bold;
    color:#458BBF;
}

#page-top .eventsListWidget .dig-in a:active,
#page-top .eventsListWidget .dig-in a:hover{
    color:#586369;
}

#page-bottom .widgetcontainer{
    float:left;  
}

body.pageid-6 #content #page-bottom h3.widgettitle{
    padding-bottom:10px;
}

#page-bottom .widget_recent_entries,
#page-bottom .widget_recent_comments{
    width:226px;
    height:295px;
    margin-right:15px;
    padding-right:15px;
    border-right: 1px solid #ccc;
}

#page-bottom .Widget_Include_Post{
   text-align:center;
   width:234px;
}

.Widget_Include_Post img{
   height:225px;
}

.Widget_Include_Post p{
    margin-bottom: 5px;
}

