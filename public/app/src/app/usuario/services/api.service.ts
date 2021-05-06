import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  private res: any = { value: '', icon_url: '', id: '', url: '' };
  private url = 'http://localhost/prueba/public/api/user_domicilio/13'; // URL to web api

  constructor(private http: HttpClient) {}

  public getUser(): Observable<any> {
    return this.http.get<any>(this.url);
  }
}
