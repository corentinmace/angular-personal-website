import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RouterMainpageComponent } from './router-mainpage/router-mainpage.component';
import { RouterGearComponent } from './router-gear/router-gear.component';
import { RouterContactComponent } from './router-contact/router-contact.component';


const routes: Routes = [
  { path: '', redirectTo: '/router-mainpage', pathMatch: 'full'},
  { path: 'router-mainpage', component: RouterMainpageComponent},
  { path: 'router-gear', component: RouterGearComponent},
  { path: 'router-contact', component: RouterContactComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponent = [RouterMainpageComponent, RouterGearComponent];
