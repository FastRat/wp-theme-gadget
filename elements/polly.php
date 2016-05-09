<div id="Poll" ng-include src="result" ></div>
<form ng-controller="Poll" ng-hide="result">
    <h4>Z jakiego gadżetu najczęściej korzystasz?</h4>
    <div class="radio">    
        <label>
            <input type="radio" name="quest" value="opt" />
            Smartphone?
        </label>
    </div>   
    <div class="radio">    
        <label>
            <input type="radio" name="quest" value="opt" />
            Tablet
        </label>
    </div> 
    <div class="radio">    
        <label>
            <input type="radio" name="quest" value="opt" />
            Smartwatch
        </label>
    </div> 
    <div class="radio">    
        <label>
            <input type="radio" name="quest" value="opt" />
            MP4
        </label>
    </div>  
    <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg" value="Głosuj" />
        <input type="button" class="btn btn-default" value="Wyniki" ng-click="result=location.href + 'section/poll_result.html'" />
    </div>

</form>