import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AprendoAngular } from './primercomponente/primer.component';
import { AprendeAngularComponent } from './aprende-angular/aprende-angular.component';
import { TestDataComponent } from './test-data/test-data.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { HomeComponent } from './home/home.component';
import { PowerbiComponent } from './powerbi/powerbi.component';
import { DatasqlComponent } from './datasql/datasql.component';

@NgModule({
  declarations: [
    AppComponent, AprendoAngular, AprendeAngularComponent, TestDataComponent, HeaderComponent, FooterComponent, HomeComponent, PowerbiComponent, DatasqlComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
