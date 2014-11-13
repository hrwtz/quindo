<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="row">
		<div class="cell well">
			<div class="sg-main g">
				<div class="g-b g-b--center">
				
					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Colors</h2>
						<div class="sg-pattern-body">
							<ul class="sg-colors clearfix">
								<li>
									<span class="sg-swatch"></span>
									<span class="sg-label"></span>
								</li>
								<li>
									<span class="sg-swatch"></span>
									<span class="sg-label"></span>
								</li>
								<li>
									<span class="sg-swatch"></span>
									<span class="sg-label"></span>
								</li>
							</ul>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Fonts</h2>
						<div class="sg-pattern-body">
							<p class="tfb">Primary font: "HelveticaNeue", "Helvetica", "Arial", sans-serif;</p>
							<p class="tfb"><em>Primary font italic: "HelveticaNeue", "Helvetica", "Arial", sans-serif;</em></p>
							<p class="tfb"><strong>Primary font bold: "HelveticaNeue", "Helvetica", "Arial", sans-serif;</strong></p>
							<p class="tfh">Heading font: Georgia, Times, "Times New Roman", serif;</p>
							<p class="tfh"><em>Heading font italic: Georgia, Times, "Times New Roman", serif;</em></p>
							<p class="tfh"><strong>Heading font bold; Georgia, Times, "Times New Roman", serif;</strong></p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Headings</h2>
						<div class="sg-pattern-body">
							<h1>Heading Level 1</h1>
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>  
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5> 
							<h6>Heading Level 6</h6>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Animations</h2>
						<div class="sg-pattern-body">
							<div class="demo-animate animate-move">
								<div class="demo-shape"></div>
								<strong>Movement:</strong> Duration: 0.8s  Easing: ease-in-out; (Hover to see effect)
							</div>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Paragraph</h2>
						<div class="sg-pattern-body">
							<p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Blockquote</h2>
						<div class="sg-pattern-body">
							<blockquote>
								<p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation.</p>
							</blockquote>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Inline Elements</h2>
						<div class="sg-pattern-body">
							<div class="text">
								<p><a href="#">This is a text link</a></p>

								<p><strong>Strong is used to indicate strong importance</strong></p>

								<p><em>This text has added emphasis</em></p>

								<p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>

								<p>The <i>i element</i> is text that is set off from the normal text</p>

								<p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>

								<p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>

								<p><s>This text has a strikethrough</s></p>

								<p>Superscript<sup>®</sup></p>

								<p>Subscript for things like H<sub>2</sub>O</p>

								<p><small>This small text is small for for fine print, etc.</small></p>

								<p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

								<p>Keybord input: <kbd>Cmd</kbd></p>

								<p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>

								<p><cite>This is a citation</cite>

								</p><p>The <dfn>dfn element</dfn> indicates a definition.</p>

								<p>The <mark>mark element</mark> indicates a highlight</p>

								<p><code>This is what inline code looks like.</code></p>

								<p><samp>This is sample output from a computer program</samp></p>

								<p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>
							</div>
						</div>
					</div>

					<div id="atoms-preformatted-text" class="sg-pattern">
						<h2 class="sg-pattern-head">Preformatted Text</h2>
						<div class="sg-pattern-body">
							<pre>  	
								P R E F O R M A T T E D T E X T
								! " # $ % &amp; ' ( ) * + , - . /
								0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
								@ A B C D E F G H I J K L M N O
								P Q R S T U V W X Y Z [ \ ] ^ _
								` a b c d e f g h i j k l m n o
								p q r s t u v w x y z { | } ~ 
							</pre>
						</div>
					</div>


					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Unordered</h2>
						<div class="sg-pattern-body content">
							<ul>
								<li>This is a list item in an unordered list</li>
								<li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line. </li>
								<li>
									Lists can be nested inside of each other
									<ul>
										<li>This is a nested list item</li>
										<li>This is another nested list item in an unordered list</li>
									</ul>
								</li>
								<li>This is the last list item</li>
							</ul>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Ordered</h2>
						<div class="sg-pattern-body content">
							<ol>
								<li>This is a list item in an ordered list</li>
								<li>An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.</li>
								<li>
									Lists can be nested inside of each other
									<ol>
										<li>This is a nested list item</li>
										<li>This is another nested list item in an ordered list</li>
									</ol>
								</li>
								<li>This is the last list item</li>
							</ol>
						</div>
					</div>


					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Icons</h2>
						<div class="sg-pattern-body">
							<ul class="icons inline-list">
								<li class="icon-twitter"></li>
								<li class="icon-facebook"></li>
								<li class="icon-stumbleupon"></li>
								<li class="icon-linkedin"></li>
								<li class="icon-pinterest"></li>
								<li class="icon-google-plus"></li>
								<li class="icon-youtube"></li>
								<li class="icon-feed"></li>
								<li class="icon-search"></li>
								<li class="icon-play"></li>
							</ul>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Favicon</h2>
						<div class="sg-pattern-body">
							<img src="<?php bloginfo('template_url'); ?>/_/img/favicon.ico">
						</div>
					</div>

					<div id="atoms-loading-icon" class="sg-pattern">
						<h2 class="sg-pattern-head">Loading Icon</h2>
						<div class="sg-pattern-body">
							<img src="" alt="Loading">
						</div>
					</div>

				
					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Buttons</h2>
						<div class="sg-pattern-body">
							<div class="g">
								<div class="g-b g-b--3of12">
									<p><a href="#" class="btn btn--b">Button</a></p>

									<p><a href="#" class="btn btn--a">Alternative Button</a></p>	

									<p><a href="#" class="btn btn--disabled">Disabled Button</a></p>	

									<p><input type="submit" value="Submit Button"></a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Text Fields</h2>
						<div class="sg-pattern-body">
							<fieldset>
							    <div class="field-container">
							        <label for="text">Text Input <abbr title="Required">*</abbr></label>
							        <input id="text" type="text" placeholder="Text Input">
							    </div>
							    <div class="field-container">
							        <label for="password">Password</label>
							        <input id="password" type="password" placeholder="Type your Password" autocomplete="off" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
							    </div>
							    <div class="field-container">
							        <label for="webaddress">Web Address</label>
							        <input id="webaddress" type="url" placeholder="http://yoursite.com">
							    </div>
							    <div class="field-container">
							        <label for="emailaddress">Email Address</label>
							        <input id="emailaddress" type="email" placeholder="name@email.com">
							    </div>
							    <div class="field-container">
							        <label for="search">Search</label>
							        <input id="search" type="search" placeholder="Enter Search Term">
							    </div>
							    <div class="field-container">
							        <label for="text">Number Input <abbr title="Required">*</abbr></label>
							        <input id="text" type="number" placeholder="Enter a Number" pattern="[0-9]*">
							    </div>
							    <div class="field-container">
							        <label for="textarea">Textarea</label>
							        <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
							    </div>
							    <div class="field-container">
							        <label class="error">Error Input</label>
							        <input class="is-error" type="text" placeholder="Text Input">
							    </div>
							    <div class="field-container">
							        <label class="valid">Valid</label>
							        <input class="is-valid" type="text" placeholder="Text Input">
							    </div>
							    <div class="field-container">
							        <label class="valid">Required</label>
							        <input class="is-valid" type="text" placeholder="Text Input *">
							    </div>
							</fieldset>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Select Menu</h2>
						<div class="sg-pattern-body">
							<fieldset>
							    <div class="field-container">
							        <label for="select">Select</label>
							        <select>
							            <optgroup label="Option Group">
							                <option>Option One</option>
							                <option>Option Two</option>
							                <option>Option Three</option>
							            </optgroup>
							        </select>
							    </div>
							</fieldset>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Checkbox</h2>
						<div class="sg-pattern-body">
							<form action="#">
							    <fieldset class="options">
							        <legend>Checkbox <abbr title="Required">*</abbr></legend>
						            <label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label>
						            <label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label>
						            <label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label>
							    </fieldset>
							</form>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Radio Buttons</h2>
						<div class="sg-pattern-body">
							<form action="#">
							    <fieldset class="options">
							        <legend>Radio</legend>
							         <label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label>
							         <label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label>
							         <label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label>
							    </fieldset>
							</form>
						</div>
					</div>


					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Html5 Inputs</h2>
						<div class="sg-pattern-body">
							<fieldset>
							    <div class="field-container"><label for="ic">Color input</label> <input type="color" id="ic" value="#000000"></div>
							    <div class="field-container"><label for="in">Number input</label> <input type="number" id="in" min="0" max="10" value="5"></div>
							    <div class="field-container"><label for="ir">Range input</label> <input type="range" id="ir" value="10"></div>
							    <div class="field-container"><label for="idd">Date input</label> <input type="date" id="idd" value="1970-01-01"></div>
							    <div class="field-container"><label for="idm">Month input</label> <input type="month" id="idm" value="1970-01"></div>
							    <div class="field-container"><label for="idw">Week input</label> <input type="week" id="idw" value="1970-W01"></div>
							    <div class="field-container"><label for="idt">Datetime input</label> <input type="datetime" id="idt" value="1970-01-01T00:00:00Z"></div>
							    <div class="field-container"><label for="idtl">Datetime-local input</label> <input type="datetime-local" id="idtl" value="1970-01-01T00:00"></div>
							</fieldset>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Table</h2>
						<div class="sg-pattern-body">
							<table>
								<thead>
									<tr>
										<td>Table Heading 1</td>
										<td>Table Heading 2</td>
										<td>Table Heading 3</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Table Cell 1</td>
										<td>Table Cell 2</td>
										<td>Table Cell 3</td>
									</tr>
									<tr>
										<td>Table Cell 1</td>
										<td>Table Cell 2</td>
										<td>Table Cell 3</td>
									</tr>
									<tr>
										<td>Table Cell 1</td>
										<td>Table Cell 2</td>
										<td>Table Cell 3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Grid</h2>
						<div class="sg-pattern-body">
							<div class="sg-grid">
								<div class="g">
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>
									<div class="g-b g-b--1of12"><div></div></div>

									<div class="g-b g-b--1of6"><div></div></div>
									<div class="g-b g-b--1of6"><div></div></div>
									<div class="g-b g-b--1of6"><div></div></div>
									<div class="g-b g-b--1of6"><div></div></div>
									<div class="g-b g-b--1of6"><div></div></div>
									<div class="g-b g-b--1of6"><div></div></div>

									<div class="g-b g-b--1of3"><div></div></div>
									<div class="g-b g-b--1of3"><div></div></div>
									<div class="g-b g-b--1of3"><div></div></div>

									<div class="g-b g-b--1of2"><div></div></div>
									<div class="g-b g-b--1of2"><div></div></div>

									<div class="g-b"><div></div></div>
								</div>
							</div>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Search</h2>
						<div class="sg-pattern-body">
							<form action="#">
							    <input class="sg-search" type="text" placeholder="Search Website">
							    <input class="sg-search" type="submit" value="Search">
							</form>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Breadcrumbs</h2>
						<div class="sg-pattern-body">
							<ul class="sg-breadcrumbs">
								<li><a href="#">Grandparent</a></li>
								<li><a href="#">Parent</a></li>
								<li><a href="#">Child</a></li>
								<li><a href="#">Grandchild</a></li>
								<li><a href="#">Great-Grandchild</a></li>
							</ul>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Sub Nav</h2>
						<div class="sg-pattern-body">
							<ul class="sg-breadcrumbs">
								<li><a href="#">Sibling</a></li>
								<li><a href="#">Sibling</a></li>
								<li><a href="#">Sibling</a></li>
								<li><a href="#">Sibling</a></li>
								<li><a href="#">Sibling</a></li>
							</ul>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Pagination</h2>
						<div class="sg-pattern-body">
							<p class="content-pagination">
								<a class="prev page-numbers" href="#">Previous        
								<a class="page-numbers" href="#">1</a>
								<span class="page-numbers current">2</span>
								<a class="page-numbers" href="#">3</a>
								<a class="page-numbers" href="#">4</a>
								<span class="page-numbers dots">…</span>
								<a class="page-numbers" href="#">8</a>
								<a class="next page-numbers" href="#">Previous</a>
							</p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Tabs</h2>
						<div class="sg-pattern-body">
							<div class="g">
								<div class="g-b g-b--2of12">Tab 1</div>
								<div class="g-b g-b--2of12">Tab 2</div>
								<div class="g-b g-b--2of12">Tab 3</div>
							</div>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Accordian</h2>
						<div class="sg-pattern-body">
							<ul class="sg-accordian">
								<li>
									<h2><a href="#">Accordian 1 -</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</li>
								<li>
									<h2><a href="#">Accordian 2 +</a></h2>
								</li>
								<li>
									<h2><a href="#">Accordian 3 +</a></h2>
								</li>
							</ul>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Post Meta</h2>
						<div class="sg-pattern-body">
							<p class="mbf">January 1, 2000</p>
							<h2 class="mbf">Post Title ipsum dolor sit amet, consectetur adipiscing elit.</h2>
							<p><em>By Author</em></p>
							<br>
							<p class="sg-date-box fl">Jan <br> 2000</p>
							<p class="fl">Post Title</p>
							<div class="clear"></div>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Read More</h2>
						<div class="sg-pattern-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum... <a href="#">Read More.</a>
							</p>
						</div>
					</div>


					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Widgets</h2>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Video Player</h2>
						<div class="sg-pattern-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							<div class="video-responsive">
								<iframe width="560" height="315" src="//www.youtube.com/embed/NONlkKMGFeA" frameborder="0" allowfullscreen></iframe>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Image In Content</h2>
						<div class="sg-pattern-body content">
							<p><img src="" alt="" class="alignleft sg-dummyimg" width="100" style="height:100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Thank You Message</h2>
						<div class="sg-pattern-body">
							<h2 class="tac">Thank You For Contact Us!</h2>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Alert</h2>
						<div class="sg-pattern-body">
							<p class="sg-alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Previous / Next</h2>
						<div class="sg-pattern-body">
							<p>
								<a href="#">Previous</a> /
								<a href="#">Next</a>
							</p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Share</h2>
						<div class="sg-pattern-body">
							<p>
								<a href="#">Facebook</a>
								<a href="#">Twitter</a>
								<a href="#">Email</a>
							</p>
						</div>
					</div>

					<div class="sg-pattern">
						<h2 class="sg-pattern-head">Image Caption</h2>
						<div class="sg-pattern-body">
							<div class="wp-caption alignnone">
								<img src="" alt="" width="100%" style="height:300px" class="sg-dummyimg">
								<p class="wp-caption-text">This is an example of an image with a caption. Photo captions, also known as cutlines, are a few lines of text used to explain or elaborate on published photographs.</p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>




<?php endwhile; endif; ?>
<?php get_footer(); ?>