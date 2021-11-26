# Angular11-Laravel8-PHP8
Angula 11.0 + Laravel 8.0 + PHP 8.0


# Setup Laravel 8 With PHP 8
1. Upgrade PHP `v8`
2. Upgrade Composer `v2`
3. Upgrade npm `v3`
4. Install Laravel `v8` 

# Setup Angular 
1. Install Angular `v11`
2. Install Node `10.19`

# Configure Laravel With Angular 
There are two ways:
1. Keep Angular and Laravel in the same repository
2. Keep frontend (Angular or React or Vue) and backend (Laravel) in seperate reposetory - communicate with RESTful API

# Keep Angular and Laravel together
 - In same repository
# Backend API call from Angular
 - In seperate reposetory (Frontend & Backend)


## app.module.ts file
1. `import { HttpClientModule } from '@angular/common/http';`

3.   `imports: [`
         `HttpClientModule`
        `],`



## app.component.ts file
1. `import { HttpClient } from '@angular/common/http';`

3. `export class AppComponent {`
  `data:any = [];` 
  `constructor (private http: HttpClient) {`
  	`this.http.get('http://localhost/CreateRESTfulAPIs/api/itemstore/v1/items/1').subscribe(data => {`
  		`this.data.push(data);`
  		`console.log(this.data);`

  	`}, error => console.error(error));`
  `}`
`}`



## app.component.html file
    <tr *ngFor="let mydata of data[0]">
      <td>{{mydata.name}}</td>
      <td>{{mydata.domain}}</td>
    </tr>
