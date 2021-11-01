<?php
$title="Management";
$link1='<span class="unactive item">Home</span>';
$link2='<span class="nav-items unactive item">Shop</span>';
$link3='<span class="nav-items unactive item">About US</span>';
$link4='<span class="nav-items nav-active-item item">Management</span>';
$content='<section>
            
            <div id="div1">
                <div class="row">
                    <div class="col-4">
                        <form>
                            <label>type :</label><br>
                            <input type="text" placeholder="enter the type">
                            <button Type="add">Add</button>
                            <button Type="update">Update</button>
                            <button Type="delete">Delete</button>
                        </form>
                    </div>
                
                
                    <div class="col-8"> 
                        <form>
                        		<h4>Data of product</h4>
                        	<div class="row">
                        		<div class="col-6">
	                                <label>ID :</label><br>
	                                <input type="text" placeholder="enter the ID">
	                                <label>Type :</label><br>
	                                <input type="text" placeholder="enter the Type">
	                                <label>Price :</label><br>
	                                <input type="text" placeholder="enter the Price">
                                </div>
                                <div class="col-6">
	                                <label>Country :</label><br>
	                                <input type="text" placeholder="enter the Country">
	                                 <label>Image :</label><br>
	                                <input type="text" placeholder="enter the Image">
	                                 <label>Size :</label><br>
	                                <input type="text" placeholder="enter the Size">
	                                
                                </div>
	                                <button Type="add">Add</button>
	                                <button Type="update">Update</button>
	                                <button Type="delete">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>';

include 'template.php';
?>
