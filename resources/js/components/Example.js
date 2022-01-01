import React, {useState, useEffect} from 'react';
import ReactDOM from 'react-dom';

function Example() {
    
    useEffect(() => {
        (async function() {
            const res = await fetch("/api/product");
            const data = await res.text();
            console.log(data);
        })();
    })

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
