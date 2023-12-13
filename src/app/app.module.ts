import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { HeroAreaComponent } from './components/hero-area/hero-area.component';
import { AppointmentComponent } from './components/appointment/appointment.component';
import { AboutAreaComponent } from './components/about-area/about-area.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    HeroAreaComponent,
    AppointmentComponent,
    AboutAreaComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
