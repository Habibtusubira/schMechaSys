<h3 id="title">Add a demon slayer</h3>

<div class="inputfields">
    <label class="labels" for="name">name the demon slayer</label><br>
    <select name="name" id="name">
        <option value="Beast Boy">Beast Boy</option>
        <option value="Mist Hashira">Mist Hashira</option>
        <option value="Kobitsuji">Kobitsuji</option>
        <option value="hashirama senju">hashirama senju</option>
    </select><br />


    <label class="labels" for="form">breathing form</label><br>
    <select name="form" id="form" required>
        <option value="Beast mimickry">Beast mimickry</option>
        <option value="Mist breathing">Mist breathing</option>
        <option value="flame breathing">flame breathing</option>
        <option value="water breathing">water breathing</option>
        <option value="stone breathing">stone breathing</option>
    </select><br />



    <label class="labels" for="level">mastery level</label><br>
    <input required type="text"name="level" class="border border-t-0 border-r-0 border-l-0 border-black"><br />

</div>

<fieldset>
    <label for="attire" class="flex justify-center mb-0" @required(true)>attire color</label><br />
    <input type="checkbox" name="attire" value="checked red">checked red
    <input type="checkbox" name="attire" value="striped green">striped green<br />
    <input type="checkbox" name="attire" value="black cloak">black cloak
    <input type="checkbox" name="attire" value="golden yellow">golden yellow
</fieldset>
