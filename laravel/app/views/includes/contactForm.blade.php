<section  class="box"  id="more_information">
    <div class="container" >
        <div class="panel">
            <div class="row-fluid">
                <div class="span6 header" id="more_info">
                    <hgroup>
                        <h2><a id="more_info_link" href="javascript:void(0);">Request more information</a></h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span6 content" id="more_info_content">
                    <div class="row-fluid">
                        <div class="span6">
                            <form class="cmxform" id="commentForm" method="get" action="">
                                <fieldset>
                                    </legend>
                                    <p style="padding-top:10px">
                                        <label for="cname">Name *</label>
                                        <input id="cname" name="name"
                                               minlength="2" type="text"
                                               required/>
                                    <p>
                                        <label for="cemail">E-Mail</label>
                                        <input id="cemail" type="email" name="email" />
                                    </p>
                                    <p>
                                        <label for="phone">Phone number *</label>
                                        <input id="phone" type="phoneUK" name="phone" required/>
                                    </p>
                                    <p>
                                        <label for="ccomment">Message *</label>
                                        <textarea id="ccomment" name="comment"
                                                  required></textarea>
                                    </p>
                                    <p>
                                        <input type="submit" value="Send Requset"
                                               class="btn btn-large btn-success">
                                    </p>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
