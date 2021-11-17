<div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="py-2 pl-5 pr-2 bg-info d-inline-block">E</h2>
      <div class="row">
          <div class="col-md-4">
            <ul class="position-fixed list-group">
                <li><a href="#execution_context">Execution context (EC)</a></li>
                <li><a href="#GEC">Execution context Global (GEC)</a></li>
                <li><a href="#FEC">Execution context Functional (FEC)</a></li>
                <li><a href="#Eval">Execution context Eval</a></li>
            </ul>
          </div>

          <div class="col-md-8">
          <hr>
            <h4 id="execution_context ">Execution context (EC)</h4>
            <hr>
            <p>Execution context (EC) is defined as the environment in which the JavaScript code is executed. By environment, I mean the value of this, variables, objects, and functions JavaScript code has access to at a particular time.</p>

            <hr>
            <h4 id="GEC">Global execution context (GEC)</h4>
            <hr>
            <p>This is the default execution context in which JS code start its execution when the file first loads in the browser. All of the global code i.e. code which is not inside any function or object is executed inside the global execution context. GEC cannot be more than one because only one global environment is possible for JS code execution as the JS engine is single threaded.</p>

            <hr>
            <h4 id="FEC">Functional execution context (FEC)</h4>
            <hr>
            <p> Functional execution context is defined as the context created by the JS engine whenever it finds any function call. Each function has its own execution context. It can be more than one. Functional execution context has access to all the code of the global execution context though vice versa is not applicable. While executing the global execution context code, if JS engine finds a function call, it creates a new functional execution context for that function. In the browser context, if the code is executing in strict mode value of this is undefined else it is window object in the function execution context.</p>

            <hr>
            <h4 id="Eval">Eval</h4>
            <hr>
            <p> Eval: Execution context inside eval function.</p>
          </div>
      </div>
      
     



  </div>