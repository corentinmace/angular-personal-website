import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import  { RouterModule, Routes } from '@angular/router';

import { AppRoutingModule, routingComponent } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { NavbarComponent } from './navbar/navbar.component';
import { TitleContainerComponent } from './title-container/title-container.component';
import { MainComponent } from './main/main.component';
import { AboutComponent } from './about/about.component';
import { CompetenceComponent } from './competence/competence.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderGearComponent } from './header-gear/header-gear.component';
import { BlacktextDirective } from './blacktext.directive';
import { MainGearComponent } from './main-gear/main-gear.component';
import { MainContactComponent } from './main-contact/main-contact.component';
import { RouterContactComponent } from './router-contact/router-contact.component';
// import { RouterMainpageComponent } from './router-mainpage/router-mainpage.component';
// import { RouterGearComponent } from './router-gear/router-gear.component';


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    NavbarComponent,
    TitleContainerComponent,
    MainComponent,
    AboutComponent,
    CompetenceComponent,
    FooterComponent,
    // RouterMainpageComponent,
    // RouterGearComponent,
    routingComponent,
    HeaderGearComponent,
    BlacktextDirective,
    MainGearComponent,
    MainContactComponent,
    RouterContactComponent

  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
