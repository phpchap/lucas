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
            <input id="phone" name="phone" required/>
        </p>
        <p>
            <label for="ccomment">Message *</label>
            <textarea id="ccomment" name="comment"
                      required></textarea>
        </p>
        <p>
            <input type="submit" value="Send Request" class="btn btn-large btn-success">
        </p>
    </fieldset>
</form>