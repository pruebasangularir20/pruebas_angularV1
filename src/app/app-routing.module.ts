import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { PowerbiComponent } from './powerbi/powerbi.component';
import { DatasqlComponent } from './datasql/datasql.component';


const routes: Routes = [
  {
    path: '',
    component: HomeComponent
  },
  {
    path: '',
    component: PowerbiComponent
  },
  {
    path: '',
    component: DatasqlComponent
  }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
