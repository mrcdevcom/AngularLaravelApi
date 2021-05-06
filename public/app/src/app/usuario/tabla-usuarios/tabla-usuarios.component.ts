import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';

@Component({
  selector: 'app-tabla-usuarios',
  templateUrl: './tabla-usuarios.component.html',
  styleUrls: ['./tabla-usuarios.component.scss'],
})
export class TablaUsuariosComponent implements OnInit {
  public res: any = { value: '', icon_url: '', id: '', url: '' };
  public stringifiedData: any = '';
  constructor(private apiservice: ApiService) {}

  ngOnInit(): void {
    this.apiservice.getUser().subscribe((res) => {
      this.res = res;
      this.stringifiedData = JSON.stringify(this.res);
    });
  }
}
