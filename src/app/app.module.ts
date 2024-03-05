import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { PreviewComponent } from './components/preview/preview.component';
import { ServicesListComponent } from './components/services-list/services-list.component';
import { TitleComponent } from './components/title/title.component';
import { TeamComponent } from './components/team/team.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    PreviewComponent,
    ServicesListComponent,
    TitleComponent,
    TeamComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
