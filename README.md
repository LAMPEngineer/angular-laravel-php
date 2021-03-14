# angular-laravel-php
Angula Laravel PHP app

# Setup Laravel With Angular 
There are two ways:
1. Keep Angular and Laravel in the same repository
2. Keep frontend (Angular or React or Vue) and backend (Laravel) in seperate reposetory - communicate with RESTful API

# Backend API call from Angular
configuration

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
    `<tr *ngFor="let mydata of data[0]">`
      `<td>{{mydata.name}}</td>`
      `<td>{{mydata.domain}}</td>`
    `</tr>`
